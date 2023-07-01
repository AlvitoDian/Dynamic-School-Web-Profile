@extends('layouts.main-home')

@section('container')
    <section id="hero">
      <div class="hero-container">
        <div
          id="heroCarousel"
          class="carousel slide carousel-fade"
          data-bs-ride="carousel"
          data-bs-interval="5000"
        >
          <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

          <div class="carousel-inner" role="listbox">
            <div
              class="carousel-item active"
              style="background-image: url(img/hero-carousel/6.png)"
            >
              <div class="carousel-container">
                <div class="container">
                  <h2 class="animate__animated animate__fadeInDown">
                    Selamat Datang di SMPN 2 Gedangan
                  </h2>
                  <p class="animate__animated animate__fadeInUp">
                    Merupakan Sebuah SMP Negeri 2 yang berlokasi di daerah Gedangan
                  </p>
                  <a
                    href="/about"
                    class="btn-get-started scrollto animate__animated animate__fadeInUp"
                    >Sejarah</a
                  >
                </div>
              </div>
            </div>

            <div
              class="carousel-item"
              style="background-image: url(img/hero-carousel/5.png)"
            >
              <div class="carousel-container">
                <div class="container">
                  <h2 class="animate__animated animate__fadeInDown">
                    Membentuk mental juara bagi siswa
                  </h2>
                  <p class="animate__animated animate__fadeInUp">
                    Banyak siswa yang sudah menaklukan dan memenangkan berbagai perlombaan akademis maupun non akademis
                  </p>
                  <a
                    href="/posts?category=prestasi"
                    class="btn-get-started scrollto animate__animated animate__fadeInUp"
                    >Prestasi</a
                  >
                </div>
              </div>
            </div>

            <div
              class="carousel-item"
              style="background-image: url(img/hero-carousel/4.png)"
            >
              <div class="carousel-container">
                <div class="container">
                  <h2 class="animate__animated animate__fadeInDown">
                    Banyak Pilihan Ekstrakurikuler
                  </h2>
                  <p class="animate__animated animate__fadeInUp">
                    Tersedia banyak ekstrakurikuler yang dapat diikuti sesuai bakat dan minat siswa
                  </p>
                  <a
                    href="/ekstra"
                    class="btn-get-started scrollto animate__animated animate__fadeInUp"
                    >Ekstrakurikuler</a
                  >
                </div>
              </div>
            </div>
          </div>

          <a
            class="carousel-control-prev"
            href="#heroCarousel"
            role="button"
            data-bs-slide="prev"
          >
            <span
              class="carousel-control-prev-icon bi bi-chevron-left"
              aria-hidden="true"
            ></span>
          </a>

          <a
            class="carousel-control-next"
            href="#heroCarousel"
            role="button"
            data-bs-slide="next"
          >
            <span
              class="carousel-control-next-icon bi bi-chevron-right"
              aria-hidden="true"
            ></span>
          </a>
        </div>
      </div>
    </section>
    
    <!--====== VIDEO FEATURE PART START ======-->
    
    <section id="video-feature" class="bg_cover pt-60 pb-110" style="background-image: url(img/background/bgspn2gd.jpeg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="video text-lg-left text-center pt-50">
                        <a class="Video-popup" href="https://www.youtube.com/watch?v=bRRtdzJH1oE"><i class="fa fa-play"></i></a>
                    </div> <!-- row -->
                </div>
                <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                    <div class="feature pt-50">
                        <div class="feature-title">
                            <h3>Aspek Unggulan</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="img/all-icon/f-1.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Ter-Akreditasi A</h4>
                                        <p>Gravida nibh vel velit auctor aliquetn auci elit cons solliazcitudirem sem quibibendum sem nibhutis.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="img/all-icon/f-2.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Sistem KBM yang Berkualitas</h4>
                                        <p>Gravida nibh vel velit auctor aliquetn auci elit cons solliazcitudirem sem quibibendum sem nibhutis.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="img/all-icon/f-3.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Perpustakaan Terbuka</h4>
                                        <p>Gravida nibh vel velit auctor aliquetn auci elit cons solliazcitudirem sem quibibendum sem nibhutis.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                        </ul>
                    </div> <!-- feature -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="feature-bg"></div> <!-- feature bg -->
    </section>
    
    <!--====== VIDEO FEATURE PART ENDS ======-->

    <main id="main">
      <!-- Form -->
          <div
            class="section-area section-sp1 ovpr-dark bg-fix online-cours pt-5"
            style="background-color:#F9F9F9"
          >
            <div class="container">
              
              <div class="mw800 m-auto">
                <div class="row">
                  <div class="col-md-4 col-sm-6">
                    <div class="cours-search-bx m-b30">
                      <div class="icon-box">
                        <h3>
                          <i class="bi bi-person-lines-fill"></i><span class="counter">{{ $gurucount }}</span>
                        </h3>
                      </div>
                      <span class="cours-search-text"
                        >Jumlah Guru {{ $gurucount }}</span
                      >
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <div class="cours-search-bx m-b30">
                      <div class="icon-box">
                        <h3>
                          <i class="bi bi-people-fill"></i><span class="counter">1024</span>
                        </h3>
                      </div>
                      <span class="cours-search-text">1024 Siswa</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <div class="cours-search-bx m-b30">
                      <div class="icon-box">
                        <h3>
                          <i class="ti-layout-list-post"></i
                          ><span class="counter">{{ $ekstracount }}</span>
                        </h3>
                      </div>
                      <span class="cours-search-text"
                        >Terdapat {{ $ekstracount }} Ekstrakurikuler</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Form END -->


        <!-- ======= About Section ======= -->
       <div id="about" class="about-area area-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Sambutan Kepala Sekolah</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="well-left">
                <div class="single-well">
                  <a href="#">
                    <img src="/img/background/bgspn2gd.jpeg" alt=""  />
                  </a>
                </div>
              </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="well-middle">
                <div class="single-well">
                  <a href="#">
                    <h4 class="sec-head">SMPN 2 Gedangan</h4>
                  </a>
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, tenetur consectetur qui mollitia numquam culpa repellendus nemo cupiditate ipsa sunt vel distinctio repudiandae labore neque harum veritatis, esse aliquid ex ipsam, inventore aliquam. Optio reprehenderit sit temporibus asperiores praesentium, quis facilis magnam, sint suscipit a, ipsum perferendis nulla cupiditate nostrum explicabo unde neque id sed accusantium eius nihil culpa. Vel natus sapiente et, ab sit debitis reiciendis assumenda non repudiandae eaque asperiores ea quia obcaecati totam ut exercitationem ipsum dolorem! Dicta ut beatae non aliquam minus necessitatibus recusandae impedit maiores eius consequuntur quaerat inventore quia ratione, repellendus cum unde. Voluptates maiores doloribus nesciunt dolorem nobis? Cumque consectetur fuga laboriosam quam, sit dolore expedita error molestias aliquam aut autem sequi ea illo harum suscipit, nam nostrum aperiam veritatis labore magnam animi porro nisi a facere. Voluptas id illo nam aspernatur vero tenetur molestiae velit tempore dignissimos! Ratione similique quis exercitationem quae blanditiis? Natus mollitia doloribus consequuntur tempore deserunt atque nisi veniam, minima voluptate, velit impedit eaque reiciendis! Asperiores recusandae saepe dolorum perferendis velit! Vitae, voluptatum eos? Fuga obcaecati tenetur omnis enim laudantium, repellat eligendi aperiam officiis voluptatem quasi qui reprehenderit consequuntur temporibus facere labore ipsa doloribus numquam eveniet itaque rem distinctio!
                  </p>
                  
                </div>
              </div>
            </div>
            <!-- End col-->
          </div>
        </div>
      </div>
    <!-- End About Section -->
    
    <!-- ======= Testimonials Section ======= -->
      <div id="testimonials" class="testimonials">
        <h1 class="text-white text-center mb-5">Apa Kata dari Tenaga Pendidik</h1>
        <hr
                style="width: 200px; background-color: white; height: 4px;
                margin-right: auto;
                margin-left: auto;
                margin-top: -30px"
                />
        <div class="container mb-5">
          <div class="testimonials-slider swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="/img/testimonials/testimonials-1.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3 class="text-white">Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec
                    porttitora entum suscipit rhoncus. Accusantium quam,
                    ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                    risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="/img/testimonials/testimonials-2.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3 class="text-white">Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse
                    labore quem cillum quid cillum eram malis quorum velit fore
                    eram velit sunt aliqua noster fugiat irure amet legam anim
                    culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="/img/testimonials/testimonials-3.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3 class="text-white">Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim
                    sint quorum nulla quem veniam duis minim tempor labore quem
                    eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="/img/testimonials/testimonials-4.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3 class="text-white">Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa
                    multos export minim fugiat minim velit minim dolor enim duis
                    veniam ipsum anim magna sunt elit fore quem dolore labore
                    illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="/img/testimonials/testimonials-5.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3 class="text-white">John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure
                    aliqua veniam tempor noster veniam enim culpa labore duis
                    sunt culpa nulla illum cillum fugiat legam esse veniam culpa
                    fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
      <!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    @if ($posts->count())
      <div id="blog" class="blog-area">
        <div class="blog-inner area-padding">
          <div class="blog-overly"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2>Berita</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- Start Left Blog -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog.html">
                      @if($posts[0]->image)

                      <div style="
                      max-height: 350px;
                      overflow: hidden;
                      ">
                      <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
                      </div>

                      @else 
                      <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                      @endif
                    </a>
                  </div>
                  <div class="blog-meta">
                   
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>{{ $posts[0]->created_at->diffForHumans() }}
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="blog.html">{{ $posts[0]->title }}</a>
                    </h4>
                    <p>
                      {{ $posts[0]->excerpt }}
                    </p>
                  </div>
                  <span>
                    <a href="/posts" class="btn btn-outline-secondary rounded-pill">Selengkapnya...</a>
                  </span>
                </div>
                <!-- Start single blog -->
              </div>
              <!-- End Left Blog-->
              <!-- Start Left Blog -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog.html">
                      @if($posts[1]->image)

                      <div style="
                      max-height: 350px;
                      overflow: hidden;
                      ">
                      <img src="{{ asset('storage/' . $posts[1]->image) }}" alt="{{ $posts[1]->category->name }}" class="img-fluid">
                      </div>

                      @else 
                      <img src="https://source.unsplash.com/1200x400?{{ $posts[1]->category->name }}" class="card-img-top" alt="{{ $posts[1]->category->name }}">
                      @endif
                    </a>
                  </div>
                  <div class="blog-meta">
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>{{ $posts[1]->created_at->diffForHumans() }}
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="blog.html">{{ $posts[1]->title }}</a>
                    </h4>
                    <p>
                      {{ $posts[1]->excerpt }}
                    </p>
                  </div>
                  <span>
                    <a href="/posts" class="btn btn-outline-secondary rounded-pill">Selengkapnya...</a>
                  </span>
                </div>
                <!-- Start single blog -->
              </div>
              <!-- End Left Blog-->
              <!-- Start Right Blog-->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog.html">
                      @if($posts[2]->image)

                      <div style="
                      max-height: 350px;
                      overflow: hidden;
                      ">
                      <img src="{{ asset('storage/' . $posts[2]->image) }}" alt="{{ $posts[2]->category->name }}" class="img-fluid">
                      </div>

                      @else 
                      <img src="https://source.unsplash.com/1200x400?{{ $posts[2]->category->name }}" class="card-img-top" alt="{{ $posts[2]->category->name }}">
                      @endif
                    </a>
                  </div>
                  <div class="blog-meta">
                    <span class="comments-type">
                      <i class="fa fa-comment-o"></i>
                    </span>
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>{{ $posts[2]->created_at->diffForHumans() }}
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="blog.html">{{ $posts[2]->title }}</a>
                    </h4>
                    <p>
                      {{ $posts[2]->excerpt }}
                    </p>
                  </div>
                  <span>
                    <a href="/posts" class="btn btn-outline-secondary rounded-pill">Selengkapnya...</a>
                  </span>
                </div>
              </div>
              <!-- End Right Blog-->
            </div>
          </div>
        </div>
      </div>
      @endif
      <!-- End Blog Section -->

      <!-- ======= Galery Section ======= -->
      @if ($galeries->count())
      <div id="testimonials" class="testimonials" style="background-color:rgb(81, 82, 82)">
        <h1 class="text-white text-center mb-5 mt-6">Galeri</h1>
        <hr
                style="width: 200px; background-color: white; height: 4px;
                margin-right: auto;
                margin-left: auto;
                margin-top: -30px"
                />
        <div class="container mt-4">
          <div class="testimonials-slider swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide mx-6">
                <div class="testimonial-item">
                  <div class="card mb-3 mx-5">
                    <a href="/galeries">
                    <img src="{{ asset('storage/' . $galeries[0]->imggallery) }}" class="card-img-top" alt="..." style="width: 100%;
                    height: 100%;
                    object-fit: cover;">
                    <div class="card-body">
                      <h5 class="card-title">{{ $galeries[0]->title }}</h5>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="card mb-3 mx-5">
                    <a href="/galeries">
                    <img src="{{ asset('storage/' . $galeries[1]->imggallery) }}" class="card-img-top" alt="..." style="
                    width: 100%;
                    height: 100%;
                    object-fit: cover;">
                    <div class="card-body">
                      <h5 class="card-title">{{ $galeries[1]->title }}</h5>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="card mb-3 mx-5">
                    <a href="/galeries">
                    <img src="{{ asset('storage/' . $galeries[2]->imggallery) }}" class="card-img-top" alt="..." style="width: 100%;
                    height: 100%;
                    object-fit: cover;">
                    <div class="card-body">
                      <h5 class="card-title">{{ $galeries[2]->title }}</h5>
                    </div>
                    </a>
                  </div>
                </div>
              </div>

              <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
      @endif
    <!-- End Galery Section -->

       <!-- ======= Contact Section ======= -->
      <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
          <div class="contact-overly"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2>Lokasi SMPN 2 Gedangan</h2>
                </div>
              </div>
            </div>
            
            <div class="">
              <!-- Start Google Map -->
              <div class="">
                <!-- Start Map -->
                <div class="lokasi">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.5622173359566!2d112.6987371147757!3d-7.402848694658704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e395a132f42b%3A0xe42ad07a363e02f0!2sSMP%20Negeri%202%20Gedangan!5e0!3m2!1sid!2sid!4v1666965510229!5m2!1sid!2sid"
                  width="100%"
                  height="380"
                  frameborder="0"
                  style="border: 0;
                  align:center;"
                  allowfullscreen
                ></iframe>
                </div>
                <!-- End Map -->
              </div>
              <!-- End Google Map -->

              <!-- Start  contact -->
              
              <!-- End Left contact -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Contact Section -->
    </main>

@endsection
