<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Shuffle Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @yield('scriptCSS')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="index.html"><span>Shuffle</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a href="{{ route('beranda') }}"
                            class="nav-link scrollto {{ request()->is('/') ? 'active' : '' }}">Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('profile') }}"
                            class="nav-link scrollto {{ request()->is('profile') ? 'active' : '' }}">Profile
                        </a>
                    </li>
                    <li><a href="{{ route('galeri') }}"
                            class="nav-link scrollto {{ request()->is('galeri') ? 'active' : '' }}">Galeri</a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link scrollto {{ request()->is('unit*') ? 'active' : '' }}">
                            <span>Unit Pendidikan</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a href="{{ route('unit/mts') }}">MTS Tahfizhul Qur'an Al</a></li>
                            <li><a href="{{ route('unit/ma') }}">MA Tahfizhul Qur'an Al Rasyid</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link scrollto{{ request()->is('divisi*') ? 'active' : '' }}">
                            <span>Divisi</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a href="{{ route('divisi/tahfiz') }}">Ketahfizhan</a></li>
                            <li><a href="{{ route('divisi/santri') }}">Kesantrian</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto {{ request()->is('psshb*', 'regist*') ? 'active' : '' }}"
                            href="{{ route('psshb') }}">PSSHB</a></li>
                    <li><a class="nav-link scrollto {{ request()->is('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    @yield('content')


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-info">
                        <h3>Shuffle</h3>
                        <p>
                            A108 Adam Street <br>
                            NY 535022, USA<br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('beranda') }}">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('profile') }}">Profile</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('galeri') }}">Galeri</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('psshb') }}">PSSHB</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('psshb') }}">Contact Us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('login') }}">Login</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Shuffle</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js') }}/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    @yield('scriptJS')
</body>

</html>
