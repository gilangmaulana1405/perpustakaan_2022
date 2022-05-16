@extends('main-page.layouts.tutorial')
@section('content')
<section id="services">
        <div class="container">
          <div class="row" data-aos="fade-up">
            <div class="col-md-12">
              <h3 class="title-page mt-2">How To Borrow Book</h3>
              <div class="section-title-page"></div>
              <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum pariatur quasi, dolores blanditiis quas voluptatum?</p>
            </div>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 service-item">
              <div class="service-icon"><i class="fa fa-desktop"></i></div>
              <h4 class="service-title"><a href="">1. Masuk ke Website Readee</a></h4>
              <p class="service-description">Buka handphone/laptop/device anda yang lainnya.
                Lalu buka browser dan masuk ke website www.readee.com</p>
            </div>
              <div class="col-lg-4 col-md-6 service-item">
                <div class="service-icon"><i class="fa fa-image" aria-hidden="true"></i></div>
                <h4 class="service-title"><a href="">2. Pilih Menu Gallery </a></h4>
                <p class="service-description">Pada menu gallery memilih buku yang anda inginkan.
                  setalah itu klik pinjam buku.</p>
              </div>
              <div class="col-lg-4 col-md-6 service-item">
                <div class="service-icon"><i class="fa fa-edit"></i></div>
                <h4 class="service-title"><a href="">3. Mengisi Form Peminjaman</a></h4>
                <p class="service-description">Setelah klik pinjam, kita harus mengisi form peminjaman.
                  Isi form dengan data-data yang benar</p>
              </div>
              <div class="col-lg-4 col-md-6 service-item">
                <div class="service-icon"><i class="fa fa-id-badge"></i></div>
                <h4 class="service-title"><a href="">4. Dapatkan ID nomor peminjaman</a></h4>
                <p class="service-description">Setelah mengisi form, anda akan mendapat ID peminjaman,
                  yang berguna untuk mengambil buku di perpustakan</p>
              </div>
              <div class="col-lg-4 col-md-6 service-item">
                <div class="service-icon"><i class="fa fa-hand-paper"></i></div>
                <h4 class="service-title"><a href="">5. Ambil Buku di Perpustakaan</a></h4>
                <p class="service-description">Pergi ke perpustakaan kampus, lalu berikan no ID
                  Peminjaman yang anda miliki pada admin perpustakaan.</p>
              </div>
              <div class="col-lg-4 col-md-6 service-item">
                <div class="service-icon"><i class="fa fa-check"></i></div>
                <h4 class="service-title"><a href="">6. Dapatkan buku dari admin</a></h4>
                <p class="service-description">Admin akan mengecek data yang telah anda isikan sebelumnya,
                  dan memberikan buku ingin anda pinjam.</p>
              </div>
            </div>
          </div>
</section>

@endsection