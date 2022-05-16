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
                                                <a href="#" class="btn btn-success btn-md">Detail</a>
                                                <a href="#" class="btn btn-warning btn-md">Edit</a>
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
                    <form action="/pinjambuku/{{ $data->id }}" method="post" class="d-inline">
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