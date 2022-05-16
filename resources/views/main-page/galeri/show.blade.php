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

     <section id="bookdetails" class="container">
        <div class="bookall">
          <div class="title">
            <h3>Detail Buku</h3>
          </div>
        <div class="box">
          <div class="book cover">
           @foreach($buku as $data) 
            <img src="{{ asset('img/'. $data->gambar) }}">
          </div>
          <div class="book detail">
            <h4 class="mb-5">{{ $data->judul }}</h4>
            <h6 class="mb-5">Kategori: {{ $data->kategori }}</h6>
            <h6 class="mb-5">Penulis: {{ $data->penulis }}</h6>
            <h6 class="mb-5">Penerbit: {{ $data->penerbit }}</h6>
            <h6 class="mb-2">Deskripsi</h6>
            <p class="mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus,
               sed. Repellat recusandae rerum officia animi dolorum ullam magnam, rem sapient
               e sint consequuntur? Nostrum exercitationem, perferendis architecto sit repellat qui
               s voluptate laborum debitis hic dicta voluptatibus accusantium voluptas. Odit, possim
               us. Quas?
              </p>
            <a href="/main-page/galeri" class="btn btn-primary btn-sm">Kembali</a>
            <a class="btn btn-success btn-sm" href="/main-page/galeri/create/{{ $data->id }}">Pinjam</a>
          </div>
          @endforeach()
        </div>
        </div>
      </section>
</main>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>