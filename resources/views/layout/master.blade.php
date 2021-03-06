<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon"> <!-- Favicon-->
    <title>Colabora!</title>
    <meta name="description" content="@yield('meta_description', config('app.name'))">
    <meta name="author" content="@yield('meta_author', config('app.name'))">
    @yield('meta')

    @stack('before-styles')

    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    @stack('after-styles')    
    @if (trim($__env->yieldContent('page-styles')))    
        @yield('page-styles')
    @endif
    
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}">
</head>

<?php 
    $setting = !empty($_GET['theme']) ? $_GET['theme'] : '';
    $theme = "theme-cyan";
    $menu = "";

    /*
    if ($setting == 'p') {
        $theme = "theme-orange";
    } else if ($setting == 'b') {
        $theme = "theme-blue";
    } else if ($setting == 'g') {
        $theme = "theme-green";
    } else if ($setting == 'c') {
        $theme = "theme-cyan";
    } else if ($setting == 'bl') {
        $theme = "theme-blush";
    } else {
            $theme = "theme-purple";
    } */
?>

<body class="<?= $theme ?>">
<!-- Page Loader -->
<div class="page-loader-wrapper" style="background: #49c5b682">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="../assets/images/logo.png" width="48" height="48" alt="InfiniO"></div>
        <p>Aguarde...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
@include('layout.navbar')
<!-- Main Left sidebar menu -->
@include('layout.sidebar')
<!-- Right Sidebar setting menu -->
@include('layout.rightsidebar')

<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">

            </div>
        </div>
        @yield('content')
    </div>
</section>

@yield('page-popup')

<!-- Scripts -->
@stack('before-scripts')
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>    
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>

@stack('after-scripts')

@if (trim($__env->yieldContent('page-script')))
    @yield('page-script')
@endif
</body>
</html>
