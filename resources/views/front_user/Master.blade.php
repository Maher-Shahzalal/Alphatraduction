<!DOCTYPE html>
<html lang="{{ app()->getLocale() != 'ar' ? 'ltr' : 'rtl' }}">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/styleee.css') }}" rel="stylesheet">
</head>
<body>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-end">
                  @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success')  }}
                       </div>
                  @endif
        <nav  class="navbar " id="navbar" >
          <ul class="">

             @yield('nav')

          </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-item active" style="background-image: url('{{ asset('/images/n.jpg') }}') ">
          <div class="carousel-container">
            <div class="container" dir="{{ app()->getLocale() != 'ar' ? 'ltr' : 'rtl' }}">

            @yield('content')

            </div>
          </div>
        </div>
      </div>
  </section>
  <footer id="footer">
    <div class="footer-top">
     <div class="container p-4">
     <div class="row">
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h3 class="text"> <img src="{{ asset('/images/w.png') }}" alt="..." class="img">  +216 54 172 681</h3>
         </div>
           <div class="col-lg-6 col-md-12 mb-4 mb-md-0 " align="right">
            <h3 class="text" > <img src="{{ asset('/images/em.png') }}" alt="..." class="img">  Noor@alphatraduction.com</h3>
        </div>
  </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>{{ __('auth.ALPHA TRADUCTION') }}</span></strong>.{{ __('auth.All Rights Reserved') }}
      </div>
    </div>
  </footer>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
