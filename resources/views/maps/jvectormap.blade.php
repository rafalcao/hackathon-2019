@extends('layout.master')
@section('parentPageTitle', 'Map')
@section('title', 'JVector Map')

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
<!-- Example -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>World</strong> Map</h2>
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
                <div id="world-map-markers" class="jvector-map"></div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2><strong>USA</strong> Map</h2>
            </div>
            <div class="body text-center">
                <div id="usa" style="height: 400px"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2><strong>Australia</strong> Map</h2>
            </div>
            <div class="body text-center">
                <div id="australia" style="height: 400px"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2><strong>India</strong> Map</h2>
            </div>
            <div class="body text-center">
                <div id="india" style="height: 400px"></div>
            </div>
        </div>
    </div>            
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2><strong>UK</strong> Map</h2>
            </div>
            <div class="body text-center">
                <div id="uk" style="height: 400px"></div>
            </div>
        </div>
    </div>            
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-in-mill.js') }}"></script><!-- India Map Js -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script><!-- USA Map Js -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js') }}"></script><!-- UK Map Js -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-au-mill.js') }}"></script><!-- Australia Map Js -->

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/maps/jvectormap.js') }}"></script>
@stop