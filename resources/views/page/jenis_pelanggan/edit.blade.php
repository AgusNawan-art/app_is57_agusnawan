@extends('layouts.master')



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
    {{-- <h1>For edit</h1> --}}
    
    <div class="card">
        <div class="card-header">
            Form Tambah Data Jenis Pelanggan
        </div>
        <div class="card-body">
            <form method="POST" action="/jenis_pelanggan/{{$jenis->id}}">
                @csrf
                @method ('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Jurusan</label>
                    <input type="text" value="{{$jenis->jenis_pelanggan}}"  name="jenis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
               
                <button type="submit" class="btn btn-primary">Edit data</button>
                <a href="/jenis_pelanggan" class="btn btn-warning">Batal</a>
            </form>
        </div>
    </div>
</div>
</div>
@endsection