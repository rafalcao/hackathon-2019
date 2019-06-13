@extends('layout.master')
@section('parentPageTitle', 'Ui')
@section('title', 'Dialogs')

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
<div class="row clearfix js-sweetalert">
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>A basic message</p>
                <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="basic">CLICK ME</button>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <p>A title with a text under</p>
                <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="with-title">CLICK ME</button>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <p>A success message!</p>
                <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="success">CLICK ME</button>
            </div>
        </div>                
        <div class="card">
            <div class="body">
                <p>A message with a custom icon</p>
                <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="with-custom-icon">CLICK ME</button>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <p>A warning message, with a function attached to the <b>Confirm</b> button...</p>
                <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="confirm">CLICK ME</button>
            </div>
        </div>                
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>An HTML message</p>
                <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="html-message">CLICK ME</button>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <p>A message with auto close timer</p>
                <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="autoclose-timer">CLICK ME</button>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <p>A replacement for the <b>prompt</b> function</p>
                <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="prompt">CLICK ME</button>
            </div>
        </div>
        <div class="card">
            <div class="body">
                    <p>With a loader (for AJAX request for example)</p>
                <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="ajax-loader">CLICK ME</button>
            </div>
        </div>
        <div class="card">
            <div class="body">
                    <p>... and by passing a parameter, you can execute something else for <b>Cancel</b>.</p>
                <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="cancel">CLICK ME</button>
            </div>
        </div>               
    </div>
</div>
@stop


@section('page-popup')

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/plugins/sweetalert/sweetalert.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/ui/dialogs.js') }}"></script>
@stop