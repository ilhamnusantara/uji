<?php

namespace App\Http\Controllers;

use App\Ktps;
use Illuminate\Http\Request;

class KtpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ktps = Ktps::paginate(5);

        return view('admin.index', [
            'nama'=>'list ktp',
            'ktps' =>$ktps
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'nik'=>'required|min:16'
        ]);

        $ktp = new Ktps;
        $ktp->nama = $request->nama;
        $ktp->nik = $request->nik;
        $ktp->alamat= $request->alamat;

        $ktp->save();
        return redirect()->route('ktp.index')->with('succes', 'Data disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ktps  $ktps
     * @return \Illuminate\Http\Response
     */
    public function show(Ktps $ktps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ktps  $ktps
     * @return \Illuminate\Http\Response
     */
    public function edit(Ktps $ktps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ktps  $ktps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ktps $ktps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ktps  $ktps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ktps $ktps)
    {
        //
    }
}
