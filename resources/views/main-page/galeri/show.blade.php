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

    <section id="portofolio">
        <div class="container">
            <div class="row portfolio-container">
                <div class="col-lg-12">
                    <div class="card mt-5" style="max-width: 580px;">
                        <div class="row no-gutters">
                                @foreach($buku as $data) 
                                <div class="col-md-4">
                                <img src="{{ asset('img/'. $data->gambar) }}" class="card-img">
                                </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->judul }}</h5>
                                <h6 class="card-subtitle mb-3 text-muted">{{ $data->kategori }}</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, id! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem esse explicabo, vel rerum illum voluptate, Libero magnam, molestiae debitis iste hic sed? amet velit.</p>
                                {{-- <p class="card-text"><small class="text-muted">Bergabung sejak {{ showDateTime($data->created_at, 'l, d F Y') }}</small></p> --}}
                                @endforeach()
                            <a href="/main-page/galeri" class="btn btn-primary btn-sm">Kembali</a>
                            </div>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</main>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>