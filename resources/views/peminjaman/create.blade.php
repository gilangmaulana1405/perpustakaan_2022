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
            <form method="post" action="/peminjaman">
            @csrf
                <div class="form-group">
                    <label for="nama_anggota">Member Name</label>
                    <select class="form-control" name="anggota_id">
                         @foreach($nama_anggota as $anggota)
                            <option value="{{ $anggota->id }}">{{ $anggota->nama_anggota }}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <label for="buku">Book Title</label>
                    <select class="form-control" name="buku_id">
                         @foreach($buku as $bk)
                            <option value="{{ $bk->id }}">{{ $bk->judul }}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <label for="buku">Category</label>
                    <select class="form-control" name="buku_id">
                         @foreach($buku as $bk)
                            <option value="{{ $bk->id }}">{{ $bk->kategori }}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <label for="buku">Writer</label>
                    <select class="form-control" name="buku_id">
                         @foreach($buku as $bk)
                            <option value="{{ $bk->id }}">{{ $bk->penulis }}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <label for="buku">Publisher</label>
                    <select class="form-control" name="buku_id">
                         @foreach($buku as $bk)
                            <option value="{{ $bk->id }}">{{ $bk->penerbit }}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <label for="buku">Publisher Year</label>
                    <select class="form-control" name="buku_id">
                         @foreach($buku as $bk)
                            <option value="{{ $bk->id }}">{{ $bk->tahun_terbit }}</option>
                        @endforeach()
                    </select>
                </div>

                <div class="form-group">
                    <label for="tanggal_pinjam">Borrow Date</label>
                    <input type="date" class="form-control @error('tanggal_pinjam') is-invalid @enderror" id="tanggal_pinjam" name="tanggal_pinjam" placeholder="Tanggal Pinjam" value="{{ old('tanggal_pinjam') }}">
                    @error('tanggal_pinjam')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
               
                <button type="submit" class="btn btn-primary">Add Data</button>
            </form>
        </div>
     </div>
@endsection