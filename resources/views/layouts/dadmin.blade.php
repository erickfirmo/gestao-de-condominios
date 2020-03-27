<!DOCTYPE html>
<html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="no-outlines">

<head>
    
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="icon" href="{{ asset('images/logo-icon.ico') }}">


    <!-- ==== Document Title ==== -->
    <title>{{ config('app.name', 'Gestão de Condomínios') }}</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">



    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/morris.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/jquery-jvectormap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/horizontal-timeline.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/ion.rangeSlider.skinFlat.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/summernote-bs4-overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
    
    <!-- Page Level Stylesheets -->
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/sweetalert.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/dadmin/assets/css/sweetalert-overrides.css') }}">


</head>
<body>

<!-- Wrapper Start -->
<div class="wrapper">
    @yield('content')
</div>


<!-- Scripts -->

@include('javascript._vars')
@include('javascript._validation')

<script src="{{ asset('themes/dadmin/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/datatables.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/raphael.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/morris.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/select2.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/jquery-jvectormap-world-mill.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/horizontal-timeline.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/jquery.steps.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/dropzone.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/js/summernote-bs4-init.js') }}"></script>
<!-- Page Level Scripts -->
<script src="{{ asset('themes/dadmin/assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('themes/dadmin/assets/js/sweetalert-init.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
<script src="{{ asset('node_modules/sweetalert2/dist/sweetalert2.all.js') }}"></script>
<script src="{{ asset('js/alerts.js') }}"></script>


@stack('js')

<!-- Page Level Scripts -->

</body>
</html>
