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

    {{-- Datatables --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
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


            <!-- Main Content -->
            @yield('content')


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

    {{-- Datatables --}}
    {{-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script> --}}
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    @yield('scriptJS')
    @include('sweetalert::alert')
</body>

</html>