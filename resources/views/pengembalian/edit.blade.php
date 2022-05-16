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
            <form method="post" action="/pengembalian/{{ $pengembalian->id }}">
           @method('PUT')
           @csrf
                <div class="form-group">
                    <label for="nama_anggota">Member Name</label>
                    <select class="form-control" name="anggota_id">
                        @foreach($nama_anggota as $anggota)
                            <option value="{{ $anggota->id }}" {{ old('anggota_id', $pengembalian->anggota_id) == $anggota->id ? 'selected' : '' }}>{{ $anggota->nama_anggota }}</option>
                        @endforeach()
                    </select>
                </div>

                 <div class="form-group">
                    <label for="buku">Publish Year</label>
                    <select class="form-control" name="buku_id">
                         @foreach($buku as $bk)
                            <option value="{{ $bk->id }}" {{ old('buku_id', $pengembalian->buku_id) == $bk->id ? 'selected' : '' }} >{{ $bk->tahun_terbit }}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <label for="buku">Book Title</label>
                    <select class="form-control" name="buku_id" disabled>
                         @foreach($buku as $bk)
                            <option value="{{ $bk->id }}" {{ old('buku_id', $pengembalian->buku_id) == $bk->id ? 'selected' : '' }} >{{ $bk->judul }}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <label for="buku">Category</label>
                    <select class="form-control" name="buku_id" disabled>
                         @foreach($buku as $bk)
                            <option value="{{ $bk->id }}" {{ old('buku_id', $pengembalian->buku_id) == $bk->id ? 'selected' : '' }} >{{ $bk->kategori }}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <label for="buku">Writer</label>
                    <select class="form-control" name="buku_id" disabled>
                         @foreach($buku as $bk)
                            <option value="{{ $bk->id }}" {{ old('buku_id', $pengembalian->buku_id) == $bk->id ? 'selected' : '' }} >{{ $bk->penulis }}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <label for="buku">Penerbit</label>
                    <select class="form-control" name="buku_id" disabled>
                         @foreach($buku as $bk)
                            <option value="{{ $bk->id }}" {{ old('buku_id', $pengembalian->buku_id) == $bk->id ? 'selected' : '' }} >{{ $bk->penerbit }}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal_pinjam">Borrow Date</label>
                    <select class="form-control" name="peminjaman_id" disabled>
                         @foreach($peminjaman as $pinjam)
                            <option value="{{ $pinjam->id }}" {{ old('peminjaman_id', $pengembalian->peminjaman_id) == $pinjam->id ? 'selected' : '' }} >{{ $pinjam->tanggal_pinjam }}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal_kembali">Return Date</label>
                    <input type="date" class="form-control @error('tanggal_kembali') is-invalid @enderror" id="tanggal_kembali" name="tanggal_kembali" placeholder="Tanggal Kembali" value="{{ old('tanggal_kembali', $pengembalian->tanggal_kembali) }}">
                    @error('tanggal_kembali')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
               
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
     </div>
@endsection