@extends('layouts.main')
@section('content')

    <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pinjam Buku</h1>
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
                            <h6 class="m-0 font-weight-bold text-primary">Data Pinjam Buku</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Full Name</th>
                                            <th>Title Book</th>
                                            <th>Category</th>
                                            <th>Borrow Amount</th>
                                            <th>Borrow Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pinjam_buku as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $data->nama_lengkap }}</td>
                                            <td>{{ $data->judul_buku }}</td>
                                            <td>{{ $data->kategori }}</td>
                                            <td>{{ $data->jumlah_pinjam }}</td>
                                            <td>{{ $data->tanggal_pinjam }}</td>
                                            <td>
                                                {{-- <a href="#" class="btn btn-success btn-md">Detail</a> --}}
                                                <a href="{{ route('pinjam.buku.edit', $data->id) }}" class="btn btn-warning btn-md">Edit</a>
                                                <form action="{{ route('pinjam.buku.destroy', $data->id) }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                <button class="btn btn-danger btn-md" onclick="return confirm('Are you sure you want to delete this data?')">Delete
                                                </button>
                                                </form>
                                            </form>
                                            </td>
                                        </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection
