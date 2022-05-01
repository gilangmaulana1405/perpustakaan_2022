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
            <form method="post" action="/peminjaman/{{ $peminjaman->id }}">
           @method('PUT')
           @csrf
                <div class="form-group">
                    <label for="nama_anggota">Nama Anggota</label>
                    <select class="form-control" name="anggota_id">
                        @foreach($nama_anggota as $anggota)
                            <option value="{{ $anggota->id }}" {{ old('anggota_id', $peminjaman->anggota_id) == $anggota->id ? 'selected' : '' }}>{{ $anggota->nama_anggota }}</option>
                        @endforeach()
                    </select>
                </div>

                 <div class="form-group">
                    <label for="buku">Tahun Terbit</label>
                    <select class="form-control" name="buku_id">
                         @foreach($buku as $bk)
                            <option value="{{ $bk->id }}" {{ old('buku_id', $peminjaman->buku_id) == $bk->id ? 'selected' : '' }} >{{ $bk->tahun_terbit }}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <label for="buku">Judul Buku</label>
                    <select class="form-control" name="buku_id" disabled>
                         @foreach($buku as $bk)
                            <option value="{{ $bk->id }}" {{ old('buku_id', $peminjaman->buku_id) == $bk->id ? 'selected' : '' }} >{{ $bk->judul }}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <label for="buku">Kategori</label>
                    <select class="form-control" name="buku_id" disabled>
                         @foreach($buku as $bk)
                            <option value="{{ $bk->id }}" {{ old('buku_id', $peminjaman->buku_id) == $bk->id ? 'selected' : '' }} >{{ $bk->kategori }}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <label for="buku">Penulis</label>
                    <select class="form-control" name="buku_id" disabled>
                         @foreach($buku as $bk)
                            <option value="{{ $bk->id }}" {{ old('buku_id', $peminjaman->buku_id) == $bk->id ? 'selected' : '' }} >{{ $bk->penulis }}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <label for="buku">Penerbit</label>
                    <select class="form-control" name="buku_id" disabled>
                         @foreach($buku as $bk)
                            <option value="{{ $bk->id }}" {{ old('buku_id', $peminjaman->buku_id) == $bk->id ? 'selected' : '' }} >{{ $bk->penerbit }}</option>
                        @endforeach()
                    </select>
                </div>

                <div class="form-group">
                    <label for="tanggal_pinjam">Tanggal Pinjam</label>
                    <input type="date" class="form-control @error('tanggal_pinjam') is-invalid @enderror" id="tanggal_pinjam" name="tanggal_pinjam" placeholder="Tanggal Pinjam" value="{{ old('tanggal_pinjam', $peminjaman->tanggal_pinjam) }}">
                    @error('tanggal_pinjam')
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