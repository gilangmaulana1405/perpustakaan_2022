@extends('main-page.layouts.cari-buku')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-1">
    <h2 class="text-center mt-3">Hasil</h2>
    </div>
  </div>
  <div class="row justify-content-center">
    @if($data)
        @foreach($data as $buku)
        <div class="col-3">
                <div class="card" style="width:250px;">
                    <img class="card-img-top" src="{{ asset('img/'. $buku->gambar) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $buku->judul }}</h5>
                        <p class="card-text">{{ $buku->kategori }}</p>
                        <button type="button" data-toggle="modal" data-target="#modalAdd" class="btn btn-primary">Pinjam</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif
</div>

<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Peminjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="{{ route('pinjam.buku.store') }}" method="post">
        @csrf

        <div class="modal-body">
            <div class="form-group mb-3">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group mb-3">
                <label for="judul_buku">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Judul Buku" required>
            </div>
            <div class="form-group mb-3">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori Buku" required>
            </div>
            <div class="form-group mb-3">
                <label for="jumlah_pinjam">Jumlah Pinjam</label>
                <input type="numeric" class="form-control" id="jumlah_pinjam" name="jumlah_pinjam" placeholder="Jumlah Pinjam Buku" required>
            </div>
            <div class="form-group mb-3">
                <label for="tanggal_pinjam">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" placeholder="Tanggal Pinjam Buku" required>
            </div>
        </div>
        <div class="modal-footer">        
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" data-title="">Save changes</button>
        </div>
        </form>
    </div>
</div>
    
@endsection