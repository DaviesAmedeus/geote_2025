<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GeoTE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <link href="assets/img/geote.png" rel="icon">
    <link href="assets/img/geote.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">



    <!-- Template Main CSS File -->
    @stack('styles')
    <link href="{{ url('assets/css/main.css') }}" rel="stylesheet">

    <script src="//unpkg.com/alpinejs" defer></script>

</head>

<body>

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                       <img src="{{asset('assets/img/geote.png')}}" alt="" height="50" width="50">
                <h1>GeoTE<span>.</span></h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <!--NAVIGATION LINKS-->
            <x-navigation-links />
            <!-- .END navbar -->
        </div>
    </header><!-- End Header -->


    <!-- Landing-section -->
    {{ $landing_section }}

    <!-- start main -->
    <main id="main">
        {{ $slot }}
    </main>
    <!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer" style="background-image: url({{ asset('assets/img/contours.jpg') }})">

        <div class="footer-content position-relative">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">

                            <div class="">

                                           <img src="{{asset('assets/img/geote.png')}}" alt="" height="90" width="90">
                            <h2>GeoTE</h2>
                            </div>
                            <p>
                                P.0 BOX 92, Sinai Street<br>
                                Kanadian Road<br>
                                Morogoro, Tanzania<br><br>

                                <strong>Phone:</strong> +255 762 780 170<br>
                                <strong>Email:</strong> info@geote.org<br>
                            </p>
                            <div class="social-links d-flex mt-3">
                                <a href="https://twitter.com/Geotetanzania"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="https://www.facebook.com/GeoTETanzania22"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/geotetanzania/"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="https://www.youtube.com/@GeoTE_TANZANIA"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-youtube"></i></a>
                            </div>
                        </div>
                    </div><!-- End footer info column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('projects') }}">Projects</a></li>
                            {{-- <li><a href="#">Blog</a></li> --}}
                            {{-- <li><a href="#">Publications</a></li> --}}
                        </ul>
                    </div><!-- End footer links column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Programs</h4>
                        <ul>
                            <li><a href="{{ route('fpt') }}">FPT</a></li>
                            <li><a href="{{ route('shortcourses') }}">GIS Short Course</a></li>
                            <li><a href="{{ route('mentorship') }}">GIS Mentorship</a></li>


                        </ul>

                    </div><!-- End footer links column-->


                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Events</h4>
                        <ul>
                            <li><a href="{{ route('geospark') }}">Geo Spark</a></li>
                            <li><a href="{{ route('mapathons') }}">Mapathons</a></li>
                        </ul>
                    </div><!-- End footer links column-->

                </div>
            </div>
        </div>

        <div class="footer-legal text-center position-relative">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>GeoTE</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="https://daviesamedeus.github.io/portfolio/" target="_blank">Davies Amedeus (koda.koda)</a>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    @stack('scripts')
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
