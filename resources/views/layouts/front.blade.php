<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel='icon' href='/img/libutyicon.png'>
  <title>@yield('title')</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="/assets/css/fontawesome.css">
  <link rel="stylesheet" href="/assets/css/libuty.css?v=3">
  <link rel="stylesheet" href="/assets/css/owl.css">
  <link rel="stylesheet" href="/assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <!--

TemplateMo 582 Tale SEO Agency

https://templatemo.com/tm-582-tale-seo-agency

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Pre-Header Area Start ***** -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-sm-9">
          <div class="left-info">
            <ul>
              @foreach($kontak as $kontaks)
              <li><a href="#"><i class="fa fa-phone"></i>{{ $kontaks->telepon }}</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i>{{ $kontaks->email }}</a></li>

            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-3">
          <div class="social-icons">
            <ul>
              <li><a href="{{ $kontaks->website }}"><i class="fas fa-globe"></i></a></li>
              <li><a href="{{ $kontaks->youtube }}"><i class="fab fa-youtube"></i></a></li>
              <li><a href="{{ $kontaks->instagram }}"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="/" class="logo">
              <img src="/img/logo/{{ $kontaks->LogoWeb }}" alt="" style="max-width: 135px;" class="img-fluid">
            </a>
            @endforeach
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              @guest
              <li class="scroll-to-section">
                <a href="/">Home</a></li>
              <li class="scroll-to-section">
                <a href="/profil">Profil</a>
              </li>
              <li class="scroll-to-section">
                <a href="/bukus">Buku</a>
              </li>
              <li class="has-sub">
                <a href="javascript:void(0)">Lainnya</a>
                <ul class="sub-menu">
                  <li>
                    <a href="/register">Register</a>
                  </li>
                  <li>                              
                    <a href="/peminjamans">Peminjaman</a>
                  </li>
                  <li>
                    <a href="/pustakawans">Pustakawan</a>
                  </li>
                  <li>
                    <a href="/beritas">Berita</a>
                  </li>
                </ul>
              </li>

              <li class="scroll-to-section">
                <a href="/panduan">Panduan</a>
              </li>
              @if(Route::has('login'))
              <li class="scroll-to-section">
                <a href="/login">Login</a>
              </li>
              @endif

              @else
              <li class="scroll-to-section">
                <a href="/">Home</a></li>
              <li class="scroll-to-section">
                <a href="/profil">Profil</a>
              </li>
              <li class="scroll-to-section">
                <a href="/bukus">Buku</a>
              </li>

              <li class="has-sub">
                <a href="javascript:void(0)">Lainnya</a>
                <ul class="sub-menu">
                  <li>                              
                    <a href="/peminjamans">Peminjaman</a>
                  </li>
                  <li>
                    <a href="/pustakawans">Pustakawan</a>
                  </li>
                  <li>
                    <a href="/beritas">Berita</a>
                  </li>
                </ul>
              </li>
              <li class="scroll-to-section">
                <a href="/panduan">Panduan</a>
              </li>
              <li class="scroll-to-section">
                  @if(Auth::user()->role_id == 1)
                  <a href="/pustakawan">{{ Auth::user()->name }}</a>
                  @else
                  <a href="/siswa">{{ Auth::user()->name }}</a>
                  @endif
              </li>

            @endguest
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  @yield('content')


  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2023 <a href="#">Troffe Corporation Inc</a>. All rights reserved.
        </p>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="/assets/js/isotope.min.js"></script>
  <script src="/assets/js/owl-carousel.js"></script>
  <script src="/assets/js/tabs.js"></script>
  <script src="/assets/js/popup.js"></script>
  <script src="/assets/js/custom.js"></script>
  <script src="/assets/js/script.js"></script>
</body>

</html>