<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark shadow fw-semibold"
    style="background-color: #1c2331">
        <div class="container">
          <a class="navbar-brand" href="/"><img src="img/{{ $logocompany }}" alt="SMPN 2 Gedangan" width="40"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item mx-2">
                <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}"  href="/">Beranda</a>
              </li>

              <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profil
                </a>
                <ul class="dropdown-menu fade-up">
                  <li><a class="dropdown-item" href="/about">Sejarah</a></li>
                  <li><a class="dropdown-item" href="/visimisi">Visi dan Misi</a></li>
                  <li><a class="dropdown-item" href="/posts?category=prestasi">Prestasi</a></li>
                  <li><a class="dropdown-item" href="/listguru">Profil Guru</a></li>

                </ul>
              </li>

              <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pendidikan
                </a>
                <ul class="dropdown-menu fade-up">
                  <li><a class="dropdown-item" href="/jadwalpemb">Jadwal Pembelajaran</a></li>
                  <li><a class="dropdown-item" href="/strukturorg">Struktur Sekolah</a></li>
                  <li><a class="dropdown-item" href="/ekstra">Ekstrakurikuler</a></li>
                  <li><a class="dropdown-item" href="/sop">Standar Operasional Prosedur (SOP)</a></li>
                </ul>
              </li>

              <li class="nav-item mx-2">
                <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">Sejarah</a>
              </li>

              <li class="nav-item mx-2">
                <a class="nav-link {{ ($title === "Berita Terbaru") ? 'active' : '' }}" href="/posts">Berita</a>
              </li>

              {{-- <li class="nav-item mx-2">
                <a class="nav-link {{ ($title === "List Harga") ? 'active' : '' }}" href="/prices">Harga Barang</a>
              </li> --}}
              
              {{-- <li class="nav-item mx-2">
                <a class="nav-link {{ ($title === "Post Categories") ? 'active' : '' }}" href="/categories">Categories</a>
              </li> --}}
              
              <li class="nav-item mx-2">
                <a class="nav-link {{ ($title === "Galeri") ? 'active' : '' }}" href="/galeries">Galeri</a>
              </li>

              <li class="nav-item mx-2">
                <a class="nav-link {{ ($title === "-") ? 'active' : '' }}" href="https://s.id/spendaged">VIRTUAL SEKOLAH</a>
              </li>
              
            </ul>
            
            {{-- <ul class="navbar-nav ms-auto">
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-clipboard2-minus-fill"></i> My Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>

                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item">
                        <i class="bi bi-box-arrow-in-right"></i> Logout
                      </button>
                    </form>
                  </li>

                </ul>
              </li>
              @else
              <li class="nav-item">
                <a href="/login" class="nav-link {{ ($title === "Login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
              </li>
              @endauth
            </ul> --}}
          </div>
        </div>
      </nav>
</header>

{{-- <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>e</span>Business</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="active" href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
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
      </nav><!-- .navbar -->

    </div>
  </header> --}}