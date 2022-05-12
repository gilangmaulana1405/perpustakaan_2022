<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Google font -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800') }}" rel="stylesheet" />
    <link
      href="{{ asset('https://fonts.googleapis.com/css2?family=Aclonica&family=Assistant:wght@200;300;400;500;600;700&family=Fredoka:wght@300;400;500&family=Lobster&family=Pacifico&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&family=Poppins:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&display=swap') }}"
      rel="stylesheet"
    />
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <title>Rak buku</title>
  </head>
  <body>
    <main id="main">
      <!-- Header -->
        @include('main-page.partials.header')
      <!-- End Of Header -->

      <!-- Ini Galeri -->
      <section id="portfolio">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-md-12">
              <h3 class="section-title">Gallery Book</h3>
              <div class="section-title-divider"></div>
              <p class="section-description">It's all books that what you want.. buy right now!</p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                {{-- <li data-filter=".filter-app">Science</li>
                <li data-filter=".filter-card">Novel</li>
                <li data-filter=".filter-web">Romance</li> --}}
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">
          @foreach($buku as $bk)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{ asset('img/'. $bk->gambar) }}" width="259px" height="400px" class="img-fluid" alt="" />
              <div class="portfolio-info">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex justify-content-end">
                    <a href="{{ route('galeri.show', $bk->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                  </div>
                <h4>{{ $bk->judul }}</h4>
                <p>{{ $bk->kategori }}</p>
                </div>
              </div>
                <button type="submit" class="btn btn-primary btn-md mt-3">Pinjam</button>
              </div>
            </div>
            @endforeach()
          </div>
        </div>
      </section>
      <!-- End of Galeri -->
    </main>

    @include('sweetalert::alert')
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
