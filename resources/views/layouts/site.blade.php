<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <title>@yield('title')</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('site/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('site/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('site/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('site/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('site/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('site/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('site/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('site/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('site/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Kelly - v2.0.0
    * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->


</head>

<body>

  @include('includes.site.header')

  @yield('content')

  @include('includes.site.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('site/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('site/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('site/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('site/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('site/assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('site/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('site/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('site/assets/vendor/typed.js/typed.min.js') }}"></script>
  <script src="{{ asset('site/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('site/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('site/assets/js/main.js') }}"></script>



</body>

</html>
