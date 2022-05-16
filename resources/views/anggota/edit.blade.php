@extends('layouts.main')
@section('content')
<!-- Page Heading -->
     <div class="row justify-content-center">
        <div class="col-lg-6">
            
                <h1 class="h3 mb-0 text-gray-800 text-center">{{ $title; }}</h1>
            
        </div>
     </div>

     <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <form method="post" action="/anggota/{{ $anggota->id }}">
           @method('PUT')
           @csrf
                <div class="form-group">
                    <label for="nama_anggota">Member Name</label>
                    <input type="text" class="form-control @error('nama_anggota') is-invalid @enderror" id="nama_anggota" name="nama_anggota" placeholder="Nama Anggota" value="{{ old('nama_anggota', $anggota->nama_anggota) }}">
                    @error('nama_anggota')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kelas">Class</label>
                    <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas" placeholder="Kelas" value="{{ old('kelas', $anggota->kelas) }}">
                    @error('kelas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Major</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Jurusan" value="{{ old('jurusan', $anggota->jurusan) }}">
                    @error('jurusan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                  <div class="form-group">
                    <label for="buku">Gender</label>
                    <select name="jenis_kelamin" class="form-control">
                    <option value="1" {{ old('jenis_kelamin', $anggota->jenis_kelamin) == 1 ? 'selected' : '' }}>Laki-laki</option>
                    <option value="2" {{ old('jenis_kelamin', $anggota->jenis_kelamin) == 2 ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Address</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Alamat" value="{{ old('alamat', $anggota->alamat) }}">
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
     </div>
@endsection