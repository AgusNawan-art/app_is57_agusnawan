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
    {{-- <h1>Data Dosen</h1> --}}
    @can('create',App\jenis_pelanggan::class)
    <a href="/pelanggan/form" class="btn btn-primary">Tambah Data</a>
    @endcan
    <br>
    <br>
    <div class="card">
        <div class="card-header">
            Data Pelanggan
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NIP</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">TELEPON</th>
                    <th scope="col">JENIS PELANGGAN</th>
                    @can('create',App\jenis_pelanggan::class)   <th scope="col">Action</th> @endcan
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pel as $item)
                        <tr>
                            <th scope="row">{{$nomor++}}</th>
                            <td>{{$item->nip}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->no_hp}}</td>
                            <td>{{$item->jenis_pelanggans->jenis_pelanggan}}</td>
                            <td>
                              @can('create',App\jenis_pelanggan::class) 
                                <a href="/pelanggan/edit/{{$item->id}}" class="btn btn-success btn-sm">edit</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#a{{$item->id}}">
                                    Hapus
                                    </button>
                                    @endcan
                                    <div class="modal fade" id="a{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        yakin dosen {{$item->nama}}ingin dihapus?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <form method="POST" action="/pelanggan/{{$item->id}}">
        @csrf
         @method ('DELETE')
            
        <button type="submit" class="btn btn-primary ">Hapus</button>
</form>
      </div>
    </div>
  </div>
</div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Belum Ada Data</td>
                        </tr>
                    @endforelse
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection