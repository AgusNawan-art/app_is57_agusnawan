@extends('layouts.master')

@section('title', 'Data Jurusan')
@section('navJur', 'active')

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
    {{-- <h1>Data Jurusan</h1> --}}
    <a href="/jenis_pelanggan/form" class="btn btn-primary">Tambah Data</a>
    <br>
    <br>
    <div class="card">
        <div class="card-header">
            Data Jurusan
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
               
                    <th scope="col">Jenis Pelanggan</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($jenis as $item)
                        <tr>
                            <th scope="row">{{$nomor++}}</th>
                            <td>{{$item->jenis_pelanggan}}</td>
                            <td>
                                <a href="/jenis_pelanggan/edit/{{$item->id}}" class="btn btn-success btn-sm">edit</a>
                                
                               
  <!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">HAPUS</button>
  
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          yakin kamar {{$item->jenis}} ingin dihapus?
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Batal</button>
          <form method="POST" action="/jenis_pelanggan/{{$item->id}}">
          @csrf
          @method ('DELETE')

      <button type="submit" class="btn btn-danger btn-sm ">Hapus</button>
          </form>
      </div>
    </div>
  </div>
</div>


                              </td>
                          </tr>
                      
                          @empty
                      <tr>
                          <td colspan="8">Belum Ada Data</td>
                      </tr>
                  @endforelse
                  
              </tbody>
          </table>
      </div>
  </div>
</div>
@endsection