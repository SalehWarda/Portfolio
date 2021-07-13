<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('site/assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('site/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('site/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('site/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{ asset('site/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('site/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('site/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{ asset('site/assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('site/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Kelly - v2.0.0
    * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row">

                <div class="col-lg-8">

                    <div class="owl-carousel portfolio-details-carousel">

                        @foreach($portfolios ->images as $image)
                            <img src="{{url($image->photo)}}" class="img-fluid" alt="">
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4 portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                        <li><strong>Category</strong>: {{$portfolios->category->name}}</li>
                        <li><strong>Name Project</strong>: {{$portfolios->name}}</li>
                        <li><strong>Project date</strong>: {{$portfolios->created_at->format('d M Y ')}}</li>
                    </ul>

                    <p>
                        <strong>Project Description</strong>:
                        {!! $portfolios->description !!}
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('site/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('site/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{ asset('site/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{ asset('site/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('site/assets/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('site/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('site/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('site/assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{ asset('site/assets/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('site/assets/js/main.js')}}"></script>

</body>

</html>
