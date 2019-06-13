@extends('layout.master')
@section('parentPageTitle', 'Ui')
@section('title', 'Notification')

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
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2> <strong>Notification</strong> Positions</h2>
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
                <div class="row clearfix jsdemo-notification-button">
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <button type="button" class="btn btn-primary btn-round btn-block waves-effect btn-raised m-b-10" data-placement-from="top" data-placement-align="left"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> TOP LEFT </button>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <button type="button" class="btn btn-primary btn-round btn-block waves-effect btn-raised m-b-10" data-placement-from="top" data-placement-align="center"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> TOP CENTER </button>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <button type="button" class="btn btn-primary btn-round btn-block waves-effect btn-raised m-b-10" data-placement-from="top" data-placement-align="right"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> TOP RIGHT </button>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <button type="button" class="btn btn-primary btn-round btn-block waves-effect btn-raised m-b-10" data-placement-from="bottom" data-placement-align="left"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BOTTOM LEFT </button>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <button type="button" class="btn btn-primary btn-round btn-block waves-effect btn-raised m-b-10" data-placement-from="bottom" data-placement-align="center"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BOTTOM CENTER </button>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <button type="button" class="btn btn-primary btn-round btn-block waves-effect btn-raised m-b-10" data-placement-from="bottom" data-placement-align="right"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BOTTOM RIGHT </button>
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
                <h2><strong>Notification</strong> Types </h2>
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
                <div class="row clearfix jsdemo-notification-button">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised btn-round m-b-10 btn-danger btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                    data-animate-enter="" data-animate-exit="" data-color-name="alert-danger"> DANGER </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised btn-round m-b-10 btn-success btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
                                    data-animate-enter="" data-animate-exit="" data-color-name="alert-success"> SUCCESS </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised btn-round m-b-10 btn-warning btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
                                    data-animate-enter="" data-animate-exit="" data-color-name="alert-warning"> WARNING </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised btn-round m-b-10 btn-info btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                    data-animate-enter="" data-animate-exit="" data-color-name="alert-info"> INFO </button>
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
                <h2><strong>With Material</strong> Design Colors <small>You can use the material design colors which example class are <code>.bg-pink, .bg-green</code></small> </h2>
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
                <div class="jsdemo-notification-button">
                    <button type="button" class="btn btn-raised btn-round m-b-10 bg-red waves-effect" data-placement-from="bottom" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="bg-red"> RED </button>
                    <button type="button" class="btn btn-raised btn-round m-b-10 bg-green waves-effect" data-placement-from="bottom" data-placement-align="center" data-animate-enter="" data-animate-exit="" data-color-name="bg-green"> GREEN </button>
                    <button type="button" class="btn btn-raised btn-round m-b-10 bg-orange waves-effect" data-placement-from="bottom" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-color-name="bg-orange"> ORANGE </button>
                    <button type="button" class="btn btn-raised btn-round m-b-10 bg-blue waves-effect" data-placement-from="bottom" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="bg-blue"> BLUE </button>
                    <button type="button" class="btn btn-raised btn-round m-b-10 bg-teal waves-effect" data-placement-from="bottom" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-color-name="bg-teal"> TEAL </button>
                    <button type="button" class="btn btn-raised btn-round m-b-10 bg-cyan waves-effect" data-placement-from="bottom" data-placement-align="center" data-animate-enter="" data-animate-exit="" data-color-name="bg-cyan"> CYAN </button>
                    <button type="button" class="btn btn-raised btn-round m-b-10 bg-pink waves-effect" data-placement-from="bottom" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="bg-pink"> PINK </button>
                    <button type="button" class="btn btn-raised btn-round m-b-10 bg-purplewaves-effect" data-placement-from="bottom" data-placement-align="center" data-animate-enter="" data-animate-exit="" data-color-name="bg-purple"> PURPLE </button>
                    <button type="button" class="btn btn-raised btn-round m-b-10 bg-blue-grey waves-effect" data-placement-from="bottom" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-color-name="bg-blue-grey"> BLUE GREY </button>
                    <button type="button" class="btn btn-raised btn-round m-b-10 bg-deep-orange waves-effect" data-placement-from="bottom" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="bg-deep-orange"> DEEP ORANGE </button>
                    <button type="button" class="btn btn-raised btn-round m-b-10 bg-light-green waves-effect" data-placement-from="bottom" data-placement-align="center" data-animate-enter="" data-animate-exit="" data-color-name="bg-light-green"> LIGHT GREEN </button>
                    <button type="button" class="btn btn-raised btn-round m-b-10 bg-black waves-effect" data-placement-from="bottom" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BLACK </button>
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
<script src="{{ asset('assets/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/ui/notifications.js') }}"></script>
@stop