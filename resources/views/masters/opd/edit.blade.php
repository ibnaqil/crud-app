@extends('masters.opd.index')

@section('edit')
    <div>

        <button type="submit"
                class="flex items-center justify-between mb-5 py-2 pl-3 pr-4 text-gray-900 dark:text-white font-medium rounded-lg text-lg px-5 py-2.5 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6 mr-2"
            ">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
            </svg>

            {{ __('Edit') }}

        </button>
        <div class="p-5 bg-gray-50 dark:bg-gray-800 dark:text-gray-400" xmlns="http://www.w3.org/1999/html">

            <form method="POST" action="{{ route('update-opd',  ['id' => $data->id]) }}">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-900 whitespace-nowrap dark:text-white text-xs font-bold mb-2"
                            for="grid-first-name">
                            Organisasi Perangkat Daerah
                        </label>
                        <input
                            value="{{$data->name}}"
                            name="name"
                            class="block w-full bg-gray-50 border border-gray-300 text-gray-900  sm:text-sm rounded py-3
                             px-4 mb-3 leading-tight focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700
                              dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                              dark:focus:border-blue-500 @error('name') is-invalid @enderror"
                            id="grid-first-name" type="text" placeholder="Dinas .. / Badan .. ">
                        @error('name')
                        <span class="text-gray-300 bg-red-900 rounded-lg p-1 text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full  px-3">
                        <label
                            class="block uppercase tracking-wide text-gray-900 whitespace-nowrap dark:text-white text-xs font-bold mb-2"
                            for="grid-last-name">
                            email
                        </label>
                        <input
                            name="email"
                            value="{{$data->email}}"
                            class=" block w-full bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded py-3
                            px-4 mb-3 leading-tight focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700
                            dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                            dark:focus:border-blue-500 @error('email') is-invalid @enderror"
                            id="grid-last-name" type="text" placeholder="name@company.com">
                        @error('email')
                        <span class="text-gray-300 bg-red-900 rounded-lg p-1 text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label
                            class="block uppercase tracking-wide text-gray-900 whitespace-nowrap dark:text-white text-xs font-bold mb-2"
                            for="grid-password">
                            Alamat
                        </label>
                        <textarea
                            name="address"
                            class="block w-full bg-gray-50 border border-gray-300 text-gray-900  sm:text-sm rounded py-3
                            px-4 mb-3 leading-tight focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700
                              dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                              dark:focus:border-blue-500 @error('address') is-invalid @enderror"
                            id="grid-password">{{$data->address}}</textarea>
                        @error('address')
                        <span class="text-gray-300 bg-red-900 rounded-lg p-1 text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <button type="submit"
                            name="update"
                            class=" flex items-center justify-between mb-5 py-2 pl-3 pr-4 text-white bg-primary-600
                    hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg
                    text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700
                    dark:focus:ring-primary-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>

                        {{ __('Save') }}

                    </button>
                    <button type="button"
                            id="popupModalLink"
                            class="popup-modal-link ml-auto flex items-center justify-between mb-5 py-2 pl-3 pr-4 text-white
                    bg-red-600
                    hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm
                    px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>

                        {{ __('Delete') }}

                    </button>
                    {{--                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"--}}
                    {{--                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"--}}
                    {{--                            type="button">--}}
                    {{--                        Toggle modal--}}
                    {{--                    </button>--}}
                    <div id="popupModal"
                         class="fixed  flex justify-center items-center hidden inset-0 bg-gray-900 backdrop-blur-sm bg-opacity-50 overflow-y-auto h-full w-full">
                        <div
                            class="relative top-20 mx-auto z-50 p-4 overflow-x-hidden overflow-y-auto md:inset-0 max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-600">
                                    <button id="exit-modal" type="button"
                                            class="close-modal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-6 text-center">
                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                             aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you
                                            sure
                                            you want to delete this data?</h3>
                                        <button type="submit"
                                                name="delete" data-modal-hide="popup-modal" type="button"
                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                            Yes, I'm sure
                                        </button>
                                        <button id="close-modal" data-modal-hide="popup-modal" type="button"
                                                class="close-modal text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                            No, cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    </div>
    <script>
        // Grab HTML Elements
        const popupModalLink = document.querySelector("#popupModalLink");
        const popupModal = document.querySelector("#popupModal");
        const closeModal = document.querySelector("#close-modal");
        const exitModal = document.querySelector("#exit-modal");

        // Add Event Listeners
        popupModalLink.addEventListener("click", () => {
            popupModal.classList.toggle("hidden");
        });

        closeModal.addEventListener("click", () => {
            popupModal.classList.toggle("hidden");
        });

        exitModal.addEventListener("click", () => {
            popupModal.classList.toggle("hidden");
        });

        window.onclick = function (event) {
            if (event.target == popupModal) {
                popupModal.classList.toggle("hidden");
            }
        }


    </script>
@endsection
