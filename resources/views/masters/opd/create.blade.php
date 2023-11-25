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

            {{ __('Create') }}

        </button>
        <div class="p-5 bg-gray-50 dark:bg-gray-800 dark:text-gray-400" xmlns="http://www.w3.org/1999/html">

            <form method="POST" action="{{ route('save-opd') }}">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-900 whitespace-nowrap dark:text-white text-xs font-bold mb-2"
                            for="grid-first-name">
                            Organisasi Perangkat Daerah
                        </label>
                        <input
                            name="name"
                            value="{{ old('name') }}"
                            class="block w-full bg-gray-50 border border-gray-300 text-gray-900  sm:text-sm rounded py-3
                             px-4 mb-3 leading-tight focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700
                              dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                              dark:focus:border-blue-500 @error('name') is-invalid @enderror"
                            id="grid-first-name" type="text" placeholder="Dinas .. / Badan .. ">
                        @error('name')
                        <span class="text-gray-300 bg-red-900 rounded-lg p-2 text-sm" role="alert">
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
                            value="{{ old('email') }}"
                            class=" block w-full bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded py-3
                            px-4 mb-3 leading-tight focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700
                            dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                            dark:focus:border-blue-500 @error('email') is-invalid @enderror"
                            id="grid-last-name" type="text" placeholder="name@company.com">
                        @error('email')
                        <span class="text-gray-300 bg-red-900 rounded-lg p-2 text-sm"
                              role="alert">
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
                            id="grid-password">{{ old('address') }}</textarea>
                        @error('address')
                        <span class="text-gray-300 bg-red-900 rounded-lg p-2 text-sm" role="alert">
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

                    {{--                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"--}}
                    {{--                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"--}}
                    {{--                            type="button">--}}
                    {{--                        Toggle modal--}}
                    {{--                    </button>--}}


                </div>
            </form>
        </div>
    </div>
@endsection
