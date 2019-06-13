@extends('layout.master')
@section('parentPageTitle', 'Chart')
@section('title', 'C3')


@section('content')
<div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Line Chart</h2>
            </div>
            <div class="body">
                <div id="chart-line"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Timeseries Chart</h2>
            </div>
            <div class="body">
                <div id="chart-time"></div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Spline Chart</h2>
            </div>
            <div class="body">
                <div id="chart-spline"></div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Line Chart with Regions</h2>
            </div>
            <div class="body">
                <div id="chart-regions"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Scatter Chart</h2>
            </div>
            <div class="body">
                <div id="chart-scatter"></div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Combination Chart</h2>
            </div>
            <div class="body">
                <div id="chart-combination"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Pie Chart</h2>
            </div>
            <div class="body">
                <div id="chart-pie"></div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Donut Chart</h2>
            </div>
            <div class="body">
                <div id="chart-donut"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Zoom Chart</h2>
            </div>
            <div class="body">
                <div id="chart-zoom"></div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Rotated Axis</h2>
            </div>
            <div class="body">
                <div id="chart-rotated"></div>
            </div>
        </div>
    </div>

</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/c3/d3.v5.min.js') }}"></script>
<script src="{{ asset('assets/vendor/c3/c3.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/chart/c3.js') }}"></script>
@stop