@extends('layouts.main')
@section('content')

    <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Peminjaman</h1>
        <a href="/peminjaman/create" class="btn btn-primary">Add Data</a>
     </div>

    @if(session()->has('success'))
            
                <div class="alert alert-success alert-dismissible fade show col-6" role="alert">
                    <strong>Successfuly!</strong> {{ session('success') }}.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    @endif()

     {{-- Datatable --}}
       <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Peminjaman</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Anggota</th>
                                            <th>Judul Buku</th>
                                            <th>Kategori</th>
                                            <th>Penulis</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($peminjaman as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $data->anggota->nama_anggota }}</td>
                                            <td>{{ $data->buku->judul }}</td>
                                            <td>{{ $data->buku->kategori }}</td>
                                            <td>{{ $data->buku->penulis }}</td>
                                            <td>{{ $data->buku->penerbit }}</td>
                                            <td>{{ $data->buku->tahun_terbit }}</td>
                                            <td>{{ $data->tanggal_pinjam }}</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-md">Detail</a>
                                                <a href="#" class="btn btn-warning btn-md">Edit</a>
                                                <a href="#" class="btn btn-danger btn-md">Delete</a>
                                            </td>
                                        </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

    {{-- Modal Add --}}
     {{-- <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- form --}}
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Save</a>
                </div>
            </div>
        </div>
    </div> --}}
@endsection