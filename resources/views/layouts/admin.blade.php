<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Bootstrap Components &rsaquo; Alert &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets2/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/components.css') }}">
    {{-- Datepicker --}}
    <link rel="stylesheet" href="{{ asset('assets2/css/daterangepicker.css') }}">

    <!--  Datatables  -->
    <link rel="stylesheet" href="{{ asset('assets2/datatables/css/dataTables.1.13.6.bootstrap5.min.css') }}">

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    @yield('scriptCSS')
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('assets2/img/avatar/avatar-1.png') }}"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">SuperAdmin</div>
                            <a href="{{ route('user') }}" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="{{ route('user') }}" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item  has-icon text-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">PPTQ</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">St</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="{{ request()->is('home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>
                        @if (\Auth::user()->admin == 'user')
                            <li class="dropdown {{ request()->is('activity*') ? 'active' : '' }}">
                                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i>
                                    <span>Activity</span></a>
                                <ul class="dropdown-menu">
                                    <li class="{{ request()->is('activity/main*') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('main') }}">Main Data's</a>
                                    </li>
                                    <li class="{{ request()->is('activity/complementary*') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('complementary') }}">Complementary
                                            Data's</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if (\Auth::user()->admin == 'super_admin')
                            <li class="{{ request()->is('ppshb*', 'date*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('ppshb') }}">
                                    <i class="fas fa-th"></i><span>PPSHB</span></a>
                            </li>
                            {{-- <li class="{{ request()->is('galery') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('galery') }}">
                                <i class="fas fa-th"></i><span>Galery</span></a>
                        </li> --}}
                            <li class="{{ request()->is('team*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('team') }}">
                                    <i class="fa fa-users" aria-hidden="true"></i><span>Our Team</span></a>
                            </li>
                            {{-- <li class="{{ request()->is('article') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('article') }}">
                                <i class="fas fa-newspaper" aria-hidden="true"></i><span>Article</span></a>
                        </li> --}}
                        @endif
                        <li class="menu-header">Pages</li>
                        <li class="dropdown {{ request()->is('user*') ? 'active' : '' }}">
                            <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i>
                                <span>User</span></a>
                            <ul class="dropdown-menu">
                                <li class="{{ request()->is('user') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('user') }}">Setting</a>
                                </li>
                                <li class="{{ request()->is('user/reset') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('reset') }}">Reset Password</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <a href="{{ route('beranda') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                            <i class="fas fa-rocket"></i> Go To Page
                        </a>
                    </div>
                </aside>
            </div>

            <!-- Main Content -->
            @yield('content')

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets2/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets2/modules/popper.js') }}"></script>
    <script src="{{ asset('assets2/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets2/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets2/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets2/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets2/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets2/js/scripts.js') }}"></script>
    <script src="{{ asset('assets2/js/custom.js') }}"></script>
    {{-- Datepicker --}}
    <script src="{{ asset('assets2/js/daterangepicker.js') }}"></script>
    <!-- Datatables  -->
    <script src="{{ asset('assets2/datatables/js/jquery.1.13.6.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets2/datatables/js/dataTables.1.13.6.bootstrap5.min.js') }}"></script>
    {{-- swwal sweetalert --}}
    <script src="{{ asset('assets2/js/sweetalert2@11.js') }}"></script>
    @yield('scriptJS')
    @include('sweetalert::alert')
</body>

</html>

<!-- Template Datatables -> https://datatables.net/examples/styling/bootstrap5.html -->
