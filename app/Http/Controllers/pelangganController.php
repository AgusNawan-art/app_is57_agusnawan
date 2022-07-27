<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use App\Models\jenis_pelanggan;
use Illuminate\Http\Request;

class pelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $pel    = pelanggan::all();
       return view('page.pelanggan.index', compact('pel','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis    = jenis_pelanggan::all();
        return view('page.pelanggan.form',compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pel = new pelanggan;

        $pel->nip = $request->nip;
        $pel->nama = $request->nama;
        $pel->alamat = $request->alamat;
        $pel->no_hp = $request->hp;
        $pel->jenis_pelanggans_id = $request->jenis;
        $pel->save();
        return redirect('/pelanggan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pel = pelanggan::find($id);
        $jenis = jenis_pelanggan::all();
        return view('page.pelanggan.edit', compact('jenis','pel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pel = pelanggan::find($id);
        $pel->nip = $request->nip;
        $pel->nama = $request->nama;
        $pel->alamat = $request->alamat;
        $pel->no_hp = $request->hp;
        $pel->jenis_pelanggans_id = $request->jenis;
        $pel->save();
        return redirect('/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pel = pelanggan::find($id);
        $pel->delete();
        return redirect('/pelanggan');
    }
}
