<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bukti Pinjam</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-7">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Sukses!</strong> {{ session('success') }}.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif()
            </div>
                
            <div class="col-7">
              <div class="card text-center">
                <div class="card-header">
                    Bukti Pinjam Buku
                </div>
                <div class="card-body">
                    <h5>Library 4C</h5>
                </div>
               <div class="row">
                <div class="col-8">
                    <p>No Pinjam :</p>
                </div>
                {{ $data->id }}
                <div class="col-8">
                    <p>Nama Peminjam :</p>
                </div>
                {{ $data->nama_lengkap }}
                <div class="col-8">
                    <p>Judul Buku :</p>
                </div>
                {{ $data->judul_buku }}
                <div class="col-8">
                    <p>Kategori :</p>
                </div>
                {{ $data->kategori }}
                <div class="col-8">
                    <p>Jumlah Pinjam :</p>
                </div>
                {{ $data->jumlah_pinjam }}
                <div class="col-8">
                    <p>Tanggal Pinjam :</p>
                </div>
                {{ $data->tanggal_pinjam }}
                
               </div>
                
                <div class="card-footer text-muted">
                    Jangan lupa untuk screenshot bukti pinjam. Terima Kasih!
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="{{ url('/main-page/galeri') }}" class="btn btn-primary mt-3">Kembali</a>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

