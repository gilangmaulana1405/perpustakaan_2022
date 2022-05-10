<header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
          <a class="logo mr-auto" href="/main-page/home">Readee</a>
          <!-- Navbar -->
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto {{ Request::is('main-page/home') ? 'active' : '' }}" href="/main-page/home">Home</a></li>
              <li><a class="nav-link scrollto {{ Request::is('main-page/galeri') ? 'active' : '' }}" href="/main-page/galeri">Galeri</a></li>
              <li><a class="nav-link scrollto {{ Request::is('main-page/cari-buku') ? 'active' : '' }}" href="/main-page/cari-buku">Cari Buku</a></li>
              <li><a class="nav-link scrollto" href="">Cara Pinjam</a></li>
              <li class="dropdown">
                <a href="#"><span>DropDon</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Apa kek 1</a></li>
                  <li class="dropdown">
                    <a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Info 1</a></li>
                      <li><a href="#">Info 2</a></li>
                      <li><a href="#">Info 3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
          <!-- End of navbar -->
        </div>
      </header>