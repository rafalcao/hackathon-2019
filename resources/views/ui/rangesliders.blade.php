@extends('layout.master')
@section('parentPageTitle', 'Ui')
@section('title', 'Rang Sliders')

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
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Examples</strong> <small>Taken by <a href="http://ionden.com/a/plugins/ion.rangeSlider/en.html" target="_blank">ionden.com/a/plugins/ion.rangeSlider/en.html</a></small> </h2>
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
                <div class="irs-demo m-b-30"> <b>Start without params</b>
                    <input type="text" id="range_01" value="" />
                </div>
                <div class="irs-demo m-b-30"> <b>Set min value, max value and start point</b>
                    <input type="text" id="range_02" value="" />
                </div>
                <div class="irs-demo m-b-30"> <b>Set type to double and specify range, also showing grid and adding prefix "$"</b>
                    <input type="text" id="range_03" value="" />
                </div>
                <div class="irs-demo m-b-30"> <b>Set up range with negative values</b>
                    <input type="text" id="range_04" value="" />
                </div>
                <div class="irs-demo m-b-30"> <b>Using step 250</b>
                    <input type="text" id="range_05" value="" />
                </div>
                <div class="irs-demo m-b-30"> <b>Set up range with fractional values, using fractional step</b>
                    <input type="text" id="range_06" value="" />
                </div>
                <div class="irs-demo m-b-30"> <b>Set up you own numbers</b>
                    <input type="text" id="range_07" value="" />
                </div>
                <div class="irs-demo m-b-30"> <b>Using any strings as your values</b>
                    <input type="text" id="range_08" value="" />
                </div>
                <div class="irs-demo m-b-30"> <b>One more example with strings</b>
                    <input type="text" id="range_09" value="" />
                </div>
                <div class="irs-demo m-b-30"> <b>No prettify. Big numbers are ugly and unreadable</b>
                    <input type="text" id="range_10" value="" />
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-popup')

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/ui/range-sliders.js') }}"></script>
@stop