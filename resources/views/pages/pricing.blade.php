@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Pricing Table')

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
    <div class="col-lg-3 cool-md-6 col-sm-12">
        <div class="card">
            <ul class="pricing body">
                <li><big>Start</big></li>
                <li>Responsive Design</li>
                <li>Color Customization</li>
                <li>HTML5 &amp; CSS3</li>
                <li>Styled elements</li>
                <li>
                    <h3>$199</h3>
                    <span>per month</span>
                </li>
                <li><button class="btn btn-primary btn-round btn-simple">Join Now</button></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 cool-md-6 col-sm-12">
        <div class="card">
            <ul class="pricing body active">
                <li><big>Good</big></li>
                <li>Responsive Design</li>
                <li>Color Customization</li>
                <li>HTML5 &amp; CSS3</li>
                <li>Styled elements</li>
                <li>
                    <h3>$299</h3>
                    <span>per month</span>
                </li>
                <li><button class="btn btn-primary btn-round">Join Now</button></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 cool-md-6 col-sm-12">
        <div class="card">
            <ul class="pricing body">
                <li><big>Ultima</big></li>
                <li>Responsive Design</li>
                <li>Color Customization</li>
                <li>HTML5 &amp; CSS3</li>
                <li>Styled elements</li>
                <li>
                    <h3>$399</h3>
                    <span>per month</span>
                </li>
                <li><button class="btn btn-primary btn-round btn-simple">Join Now</button></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 cool-md-6 col-sm-12">
        <div class="card">
            <ul class="pricing body">
                <li><big>Vip</big></li>
                <li>Responsive Design</li>
                <li>Color Customization</li>
                <li>HTML5 &amp; CSS3</li>
                <li>Styled elements</li>
                <li>
                    <h3>$799</h3>
                    <span>per month</span>
                </li>
                <li><button class="btn btn-primary btn-round btn-simple">Join Now</button></li>
            </ul>
        </div>
    </div>
</div>
@stop

@section('page-styles')
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop