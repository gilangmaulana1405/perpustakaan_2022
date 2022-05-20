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
    <title>Gallery</title>
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
              <img src="{{ asset('img/header.png') }}" class="header" alt="">
            </div>
            <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-1">Science</li>
                <li data-filter=".filter-2">History</li>
                <li data-filter=".filter-3">Self-Improvement</li>
                <li data-filter=".filter-4">Novel</li>
              </ul>
            </div>
          </div>
          </div>

         <div class="container">
            <div class="row portfolio-container">
            @foreach($buku as $bk)
              <div class="col-lg-3 portfolio-item filter-4">
                <a href="{{ route('galeri.show', $bk->id) }}" class="img-link">
                    <img src="{{ asset('img/'. $bk->gambar) }}" class="img-fluid" alt="foto1" /></a>
                  <div class="bd-highlight">
                    <h4>{{ $bk->judul }}</h4>
                    <p>{{ $bk->kategori }}</p>
                  </div>
              </div>
              @endforeach()
            </div>
          </div>
        </div>
      </section>
      <!-- End of Galeri -->
    </main>

    <!-- Modal -->
{{-- <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog">
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
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
    </div>
</div> --}}

    @include('sweetalert::alert')

    <!-- Footer -->
    @include('main-page.partials.footer')
  
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>
