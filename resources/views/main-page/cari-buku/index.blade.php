@extends('main-page.layouts.cari-buku')
@section('content')

<section class="book-search text-center">
    <div class="container">  
      <div class="row justify-content-center">
        <div class="col-6">
          <form action="/main-page/cari-buku/search" method="get">
           <div class="mb-3">
              <input type="search" name="search" class="form-control" placeholder="Enter book title.." required>
              {{-- <button class="input-group-text btn btn-primary btn-md" id="basic-addon2"><i class="fa fa-search fa-solid fa-md" border="0"></i></button> --}}
            </div>
        </form>
        </div>
      </div>
    </div>
</section>


<section id="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h3 class="title-page">Recommended books</h3>
            </div>
        </div>

        <div class="row portfolio-container">
            @foreach($buku as $bk)
              <div class="col-lg-4 col-md-6 portfolio-item filter-app mb-3">
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
              @endforeach()
          </div>
    </div>
</section>

   
@endsection