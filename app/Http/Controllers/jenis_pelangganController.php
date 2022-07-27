<?php

namespace App\Http\Controllers;

use App\Models\jenis_pelanggan;
use Illuminate\Http\Request;

class jenis_pelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $nomor    = 1;
       $jenis    = jenis_pelanggan::all();
       return view('page.jenis_pelanggan.index', compact('jenis','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('page.jenis_pelanggan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $jenis = new jenis_pelanggan;

       $jenis->jenis_pelanggan = $request->jenis;
       $jenis->save();
       return redirect('/jenis_pelanggan');
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
        $jenis = jenis_pelanggan::find($id);
        return view('page.jenis_pelanggan.edit', compact('jenis'));
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
        $jenis = jenis_pelanggan::find($id);
        $jenis->jenis_pelanggan = $request->jenis;
        $jenis->save();
        return redirect('/jenis_pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis = jenis_pelanggan::find($id);
        $jenis->delete();
        return redirect('/jenis_pelanggan');
    }
}
