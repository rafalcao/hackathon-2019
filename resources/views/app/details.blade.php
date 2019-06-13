@extends('layout.master')
@section('parentPageTitle', 'Inbox')
@section('title', 'Inbox List')

@section('sub-header')
<div class="col-lg-6 col-md-4 col-sm-12 text-right">
    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
        <h5 class="m-b-0"><i class="zmdi zmdi-inbox m-r-10"></i>125</h5>
        <small>Primary</small>
    </div>
    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
        <h5 class="m-b-0"><i class="zmdi zmdi-alert-circle m-r-10"></i>348</h5>
        <small>Updates</small>
    </div>
    <a href="{{route('app.compose')}}" class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Compose</a>
</div>
@stop

@section('sub-action-bar')
@stop

@section('content')
<div class="inbox">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <h4 class="margin-0">Your updated item InfiniO</h4>
                            <span class="text-muted">Mar 9 (4 days ago)</span>
                            <hr>
                            <div class="media">
                                <div class="float-left">
                                    <div class="m-r-20"> <img class="rounded" src="../assets/images/xs/avatar7.jpg" width="60" alt=""> </div>
                                </div>
                                <div class="media-body">
                                    <p class="m-b-0">
                                        <strong class="text-muted m-r-5">From:</strong>
                                        <a href="javascript:void(0);" class="text-default">info@example.com</a>
                                    </p>
                                    <p class="m-b-0">
                                        <strong class="text-muted m-r-10">To:</strong>Me
                                    </p>
                                    <p class="m-b-0">
                                        <strong class="text-muted m-r-10">CC:</strong><a href="javascript:void(0);">info@example.com</a>
                                    </p>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <p>printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrnturies, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                
                        </div>
                        <div class="col-md-12">
                            <span><img src="../assets/images/image2.jpg" class="img-thumbnail m-t-10" width="250" alt=""></span>
                            <span><img src="../assets/images/image3.jpg" class="img-thumbnail m-t-10" width="250" alt=""></span>
                        </div>                   
                    </div>
                    <hr>
                    <strong>Click here to</strong> <a href="mail-compose.html">Reply</a> or <a href="mail-compose.html">Forward</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="body">
                    <p class="copyright m-b-0">Copyright 2018 © All Rights Reserved. InfiniO Dashboard Template</p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/css/inbox.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop