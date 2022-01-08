<!DOCTYPE html>
<html lang="{{ app()->getLocale() != 'ar' ? 'ltr' : 'rtl' }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <link href="assetspage/assets/img/favicon.png" rel="icon">
    <link href="assetspage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    <link href="assetspage/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assetspage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assetspage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assetspage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assetspage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assetspage/assets/css/style.css" rel="stylesheet">
</head>
<body>
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="#" class="logo mr-auto"><img src="#" alt=""></a>
             <nav  class="navbar " id="navbar">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success')  }}
                </div>
            @endif
                 <ul class="">
                @yield('nav')
                 </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
<section id="hero">
    <div class="hero-container">
        @yield('content')
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
        </div>
    </div>
</footer>
</footer>
<script src="assetspage/assets/vendor/aos/aos.js"></script>
<script src="assetspage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assetspage/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assetspage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assetspage/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assetspage/assets/vendor/typed.js/typed.min.js"></script>
<script src="assetspage/assets/vendor/php-email-form/validate.js"></script>
<script src="assetspage/assets/js/main.js"></script>
</body>
</html>
