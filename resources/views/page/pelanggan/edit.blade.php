@extends('layouts.master')

@section('title', 'edit')
@section('navDos', 'active')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<div class="container  bg-white mt-3 p-4">
    {{-- <h1>Data Dosen</h1> --}}
    
    <div class="card">
        <div class="card-header">
            Form Edit Data Dosen
        </div>
        <div class="card-body">
            <form method="post" action="/pelanggan/{{$pel->id}}">
                @csrf
                @method ('PUT')
               
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIP</label>
                    <input type="text" value="{{$pel->nip}}" name="nip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">NAMA </label>
                    <input type="text" value="{{$pel->nama}}" name="nama" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" value="{{$pel->alamat}}" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NO HP</label>
                    <input type="text" value="{{$pel->no_hp}}" name="hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="col-sm-2 col-form-label">jenis Pelanggan</label>
                      <select name="jenis" class="form-control" id="">
                        <option value="">-Pilih Jenis Pelanggan-</option>
                        @foreach ($jenis as $item)
                          <option value="{{$item->id}}">{{$item->jenis_pelanggan}}</option>
                        @endforeach
                        
                      </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Tambah Data</button>
                  <a href="/pelanggan" class="btn btn-warning">Batal</a>
            </form>
        </div>
    </div>
</div>
</div>
@endsection