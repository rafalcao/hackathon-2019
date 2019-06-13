@extends('layout.master')
@section('parentPageTitle', 'Charts')
@section('title', 'JQuery Knob')

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

@section('sub-action-bar')

@stop

@section('content')
<div class="row clearfix">
    <div class="col-lg-3">
        <div class="card">                   
            <div class="body text-center">
                <input type="text" class="knob" value="86" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#ff598f">
                <p class="text-muted m-b-0">BASIC EXAMPLES</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">                   
            <div class="body text-center">
                <input type="text" class="knob" data-linecap="round" value="56" data-width="125" data-height="125" data-thickness="0.25"data-fgColor="#64c8c0">
                <p class="text-muted m-b-0">ROUNDED CORNERS</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">                   
            <div class="body text-center">                            
                <input type="text" class="knob" value="65" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#cb8fe7" readonly>
                <p class="text-muted m-b-0">READ-ONLY</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">                   
            <div class="body text-center">                            
                    <input type="text" class="knob" data-skin="tron" value="100" data-width="125" data-height="125" data-thickness="0.2" data-angleArc="270"
                    data-angleoffset="90" data-fgColor="#fc967f">
                <p class="text-muted m-b-0">TRON STYLE</p>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Different Sizes</h2>                        
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-md-2">
                        <input type="text" class="knob" value="86" data-width="90" data-height="90" data-thickness="0.05" data-fgColor="#ff598f">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="knob" value="92" data-width="120" data-height="120" data-thickness="0.32" data-fgColor="#64c8c0">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="knob" value="93" data-width="120" data-height="120" data-thickness="0.50" data-fgColor="#ffcd29">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="knob" value="89" data-width="80" data-height="80" data-thickness="0.16" data-fgColor="#cb8fe7">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="knob" value="91" data-width="75" data-height="75" data-thickness="0.2" data-fgColor="#fc967f">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="knob" value="93" data-width="120" data-height="120" data-thickness="0.12" data-fgColor="#8bc3fe">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Different Angles & Offsets</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-md-2">
                        <input type="text" class="knob" value="35" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="-125"
                                    data-fgColor="#ff598f">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="knob" value="45" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="-305"
                                    data-fgColor="#64c8c0">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="knob" value="40" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="-35"
                                    data-fgColor="#ffcd29">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="knob" value="36" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="145"
                                    data-fgColor="#cb8fe7">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="knob" value="43" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="270" data-angleoffset="-0"
                                    data-fgColor="#fc967f">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="knob" value="52" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="270" data-angleoffset="90"
                                    data-fgColor="#8bc3fe">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-popup')

@stop

@section('page-styles')
@stop

@section('page-script')
<script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/charts/jquery-knob.js') }}"></script>
@stop