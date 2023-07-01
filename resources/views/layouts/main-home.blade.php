<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <title>SMPN 2 Gedangan | {{ $title }}</title>
    
    <!-- Vendor CSS Files -->
    <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/vendor/themify/themify-icons.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link href="/css/styles.css" rel="stylesheet">
    
    {{-- My Styles --}}
    <link rel="stylesheet" href="/css/style.css">

    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon" />
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon" />
    

  </head>
  <body>

    {{-- Navbar --}}
    <header class="fixed-top header-home">
    <nav class="navbar navbar-expand-lg shadow navbar-dark fw-semibold">
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
   
  <div class="">
    @yield('container')
  </div>

    @include('footer')

     <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-chevron-up"></i></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Vendor JS Files -->
    {{-- <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
   <script src="js/main.js"></script>
 {{--   <script src="/vendor/counter/counterup.min.js"></script>
   <script src="/vendor/counter/waypoints-min.js"></script> --}}
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script> --}}
    
    <script type="text/javascript">
        window.addEventListener("scroll", function(){
          var header = document.querySelector("header");
          header.classList.toggle("sticky", window.scrollY > 0);
        })

      /*  var setCounterUp = function(){
					if(!checkSelectorExistence('.counter')){return;}
					 jQuery('.counter').counterUp({
						delay: 10,
						time: 3000
					});	
				} */
     
    </script>
    
  </body>
</html>