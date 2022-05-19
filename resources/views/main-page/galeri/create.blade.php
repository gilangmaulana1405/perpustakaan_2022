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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3 class="text-center mt-5">Form Pinjam Buku</h3>
            </div>

            <div class="col-6">
                <form action="{{ route('pinjam.buku.store', $buku->id) }}" method="POST">
                @csrf
                    {{-- <div class="form-group mb-3">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" name="nama_lengkap">
                        @error('nama_lengkap')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                    <div class="form-group mb-3">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $buku->nama_lengkap) }}" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="{{ old('judul_buku', $buku->judul) }}" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" value="{{ old('kategori', $buku->kategori) }}" readonly>
                    </div>
                     <div class="form-group mb-3">
                        <label for="jumlah_pinjam">Jumlah Pinjam</label>
                        <input type="numeric" class="form-control" id="jumlah_pinjam" name="jumlah_pinjam" value="{{ old('jumlah_pinjam', $buku->jumlah_pinjam) }}" placeholder="Jumlah Pinjam Buku" required>
                    </div>
                     <div class="form-group mb-3">
                        <label for="tanggal_pinjam">Tanggal Pinjam</label>
                        <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
                    </div>
                    {{-- <div class="form-group mb-3">
                        <label for="jumlah_pinjam">Jumlah Pinjam</label>
                        <input type="numeric" class="form-control @error('jumlah_pinjam') is-invalid @enderror" id="jumlah_pinjam" name="jumlah_pinjam">
                        @error('jumlah_pinjam')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    </main>

  
    @include('sweetalert::alert')
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>
