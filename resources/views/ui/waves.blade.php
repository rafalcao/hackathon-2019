@extends('layout.master')
@section('parentPageTitle', 'Ui')
@section('title', 'Waves')

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
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Color</strong> Variations</h2>
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
                <ul class="row list-unstyled text-right">
                    <li class="col-lg-3 col-md-6"> Default <a href="javascript:void(0);" class="btn btn-default waves-effect ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-light</code> <a href="javascript:void(0);" class="btn bg-blue waves-effect waves-light ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-red</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-red ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-pink</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-pink ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-purple</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-purple ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-deep-purple</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-deep-purple ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-indigo</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-indigo ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-blue</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-blue ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-light-blue</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-light-blue ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-cyan</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-cyan ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-teal</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-teal ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-green</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-green ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-light-green</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-light-green ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-lime</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-lime ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-yellow</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-yellow ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-amber</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-amber ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-orange</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-orange ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-deep-orange</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-deep-orange ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-brown</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-brown ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-grey</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-grey ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-blue-grey</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-blue-grey ">CLICK ME</a> </li>
                    <li class="col-lg-3 col-md-6"> <code>waves-black</code> <a href="javascript:void(0);" class="btn btn-default waves-effect waves-black ">CLICK ME</a> </li>
                    </li>
                </ul>
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
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop