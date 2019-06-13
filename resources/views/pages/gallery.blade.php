@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Image Gallery')

@section('sub-header')
<div class="col-lg-6 col-md-4 col-sm-12 text-right">
    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
        <div class="sparkline" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#706bd1">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
        <small>Page Views</small>
    </div>
    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
        <div class="sparkline" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#2196f3">1,3,5,7,4,6,3,2,6,5,9,8,7,9,5</div>
        <small>Visitors</small>
    </div>
    <button class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Create New</button>
</div>
@stop

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Gallery</strong> <small>All pictures taken from <a href="https://pexels.com/" target="_blank">pexels.com</a></small> </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/images/image-gallery/1.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/1.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/images/image-gallery/2.jpg" > <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/2.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/images/image-gallery/3.jpg" > <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/3.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/images/image-gallery/4.jpg" > <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/4.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/images/image-gallery/5.jpg" > <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/5.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/images/image-gallery/6.jpg" > <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/6.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/images/image-gallery/7.jpg" > <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/7.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/images/image-gallery/8.jpg" > <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/8.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/images/image-gallery/9.jpg" > <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/9.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/images/image-gallery/10.jpg" > <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/10.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/images/image-gallery/11.jpg" > <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/11.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/images/image-gallery/12.jpg" > <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/12.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/images/image-gallery/13.jpg" > <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/13.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/images/image-gallery/14.jpg" > <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/14.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/images/image-gallery/15.jpg" > <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/15.jpg" alt=""> </a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/light-gallery/css/lightgallery.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/plugins/light-gallery/js/lightgallery-all.min.js') }}"></script>
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/medias/image-gallery.js') }}"></script>
@stop