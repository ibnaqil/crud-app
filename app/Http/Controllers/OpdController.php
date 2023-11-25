<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opd;
use Illuminate\Support\Facades\Auth;
use Log;
use Redirect;
use Str;
use Carbon\Carbon;

class OpdController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $opd = Opd::orderBy('id', 'desc')->simplePaginate(15);

        return view('masters.opd.index', array('opd' => $opd));
    }

    public function edit($id)
    {
        $opd = Opd::orderBy('id', 'desc')->simplePaginate(15);
        $data = Opd::find($id);

        return view('masters.opd.edit', array('opd' => $opd, 'data' => $data));
    }

    public function create()
    {
        $opd = Opd::orderBy('id', 'desc')->simplePaginate(15);

        return view('masters.opd.create', array('opd' => $opd));
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\Opd
     */

    protected function save(Request $request)
    {

        $validated = $request->validate([
            'name' => [
                'required',
            ],
            'email' => [
                'required', 'email', 'unique:opd',
            ]
        ]);
        $opd = new Opd();


        if (!$opd) {
            abort(404);
        }

        $opd->name = $request->name;
        $opd->email = $request->email;
        $opd->address = $request->address;

        $opd->save();

        return Redirect::back()->withSuccess('Sukses, data berhasil ditambah')->withErrors(['messages' => $validated]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\Opd
     */
    protected function update(Request $request)
    {
        $validated = null;
        $id = $request->id;
        $opd = Opd::findOrFail($id);


        if (!$opd) {
            abort(404);
        }

        if ($request->has('delete')) {
            $opd->delete();
        }


        if ($request->has('update')) {

            $validated = $request->validate([
                'name' => [
                    'required',
                ],
                'email' => [
                    'required', 'email', 'unique:opd,id,:id',
                ]
            ]);


            $opd->name = $request->name;
            $opd->email = $request->email;
            $opd->address = $request->address;

            $opd->save();
        }
        if ($request->has('delete')) {
            return redirect()->route('opd');
        } else {
//            return Redirect::back()->withErrors(['messages' => $validated]);
            return Redirect::back()->withSuccess('Sukses, data berhasil diubah')->withErrors(['messages' => $validated]);
        }


    }
}
