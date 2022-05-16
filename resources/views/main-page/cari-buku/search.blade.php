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
        @foreach($data as $bk)
        <div class="col-lg-3 col-md-6 portfolio-item filter-app mb-3">
              <a href="{{ route('galeri.show', $bk->id) }}" class="img-link">
                <img src="{{ asset('img/'. $bk->gambar) }}" width="259px" height="400px" class="img-fluid mb-4" alt="" />
                <div class="portfolio-info">
                <div class="row">
                  <div class="col-9">
                    <div class="d-flex justify-content-end">
                      <a href="{{ route('galeri.show', $bk->id) }}" class="btn btn-info btn-sm" style="display: none"><i class="fa fa-eye"></i></a>
                    </div>
                  <h4 class="mb-2">{{ $bk->judul }}</h4>
                  <p class="mb-2">{{ $bk->kategori }}</p>
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