@extends('layouts.main')
@section('content')

    <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Anggota</h1>
        {{-- <a class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">Add Data</a> --}}
        <a href="/anggota/create" class="btn btn-primary">Add Data</a>
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
                            <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Anggota</th>
                                            <th>Kelas</th>
                                            <th>Jurusan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($anggota as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $data->nama_anggota }}</td>
                                            <td>{{ $data->kelas }}</td>
                                            <td>{{ $data->jurusan }}</td>
                                            <td>{{ $data->jenis_kelamin }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                                <a href="/anggota/{{ $data->id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm" onclick="handleDelete()"><i class="fa fa-trash"></i>
                                                </a>
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

                    <ul id="error_list"></ul>
                    
                    <div class="form-group">
                        <label for="nama_anggota">Nama Anggota</label>
                        <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Nama Anggota">
                    </div>
                     <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
                    </div>
                     <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option>laki-laki</option>
                            <option>perempuan</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" id="btn_add">Save</button>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- Modal Edit --}}
    {{-- <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul id="error_list"></ul>
                    
                    <div class="form-group">
                        <label for="nama_anggota">Nama Anggota</label>
                        <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Nama Anggota">
                    </div>
                     <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
                    </div>
                     <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option>laki-laki</option>
                            <option>perempuan</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" id="btn_add">Edit</button>
                </div>
            </div>
        </div>
    </div> --}}

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
                    <form action="/anggota/{{ $data->id }}" method="post" class="d-inline">
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
    function handleDelete(){
        $('#modalDelete').modal('show');
    }
</script>