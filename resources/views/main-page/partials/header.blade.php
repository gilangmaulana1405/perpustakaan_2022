<header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
          <a class="logo mr-auto" href="/main-page/home">Readee</a>
          <!-- Navbar -->
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto {{ Request::is('main-page/home') ? 'active' : '' }}" href="/main-page/home">Home</a></li>
              <li><a class="nav-link scrollto {{ Request::is('main-page/galeri') ? 'active' : '' }}" href="/main-page/galeri">Gallery</a></li>
              <li><a class="nav-link scrollto {{ Request::is('main-page/cari-buku') ? 'active' : '' }}" href="/main-page/cari-buku">Search Book</a></li>
              <li><a class="nav-link scrollto {{ Request::is('main-page/tutorial') ? 'active' : '' }}" href="/main-page/tutorial">How To Borrow</a></li>
              <li><a class="nav-link scrollto {{ Request::is('main-page/kontak') ? 'active' : '' }}" href="/main-page/kontak">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
          <!-- End of navbar -->
        </div>
  </header>