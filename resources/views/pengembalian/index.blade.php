@extends('layouts.main')
@section('content')

    <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title; }}</h1>
        <a href="/pengembalian/create" class="btn btn-primary">Add Data</a>
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
                            <h6 class="m-0 font-weight-bold text-primary">Data {{ $title; }}</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Member Name</th>
                                            <th>Book Title</th>
                                            <th>Category</th>
                                            <th>Writer</th>
                                            <th>Publisher</th>
                                            <th>Publish Year</th>
                                            <th>Borrow Date</th>
                                            <th>Return Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengembalian as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $data->anggota->nama_anggota }}</td>
                                            <td>{{ $data->buku->judul }}</td>
                                            <td>{{ $data->buku->kategori }}</td>
                                            <td>{{ $data->buku->penulis }}</td>
                                            <td>{{ $data->buku->penerbit }}</td>
                                            <td>{{ $data->buku->tahun_terbit }}</td>
                                            <td>{{ $data->peminjaman->tanggal_pinjam }}</td>
                                            <td>{{ $data->tanggal_kembali }}</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-md">Detail</a>
                                                <a href="/pengembalian/{{ $data->id }}/edit" class="btn btn-warning btn-md">Edit</a>
                                                <button class="btn btn-danger btn-md" onclick="handleDelete()">Delete
                                                </button>
                                            </form>
                                            </td>
                                        </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

    {{-- Modal Delete --}}
     <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete this data?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="/pengembalian/{{ $data->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function handleDelete()
    {
        $('#modalDelete').modal('show');
    }
</script>