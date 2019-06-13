@extends('layout.master')
@section('parentPageTitle', 'Inbox')
@section('title', 'Compose')

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
    <a href="{{route('app.inbox')}}" class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Inbox</a>
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
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="To">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="CC">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <strong>Content:</strong>
                            <div class="summernote">
                                <h3 class="mb-0">hi,</h3>
                                <h4 class="mt-0">we are Summernote</h4>
                                <p></p>
                            </div>
                            <button type="button" class="btn btn-primary btn-round waves-effect m-t-20">Send Message</button>
                        </div>
                    </div>
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
<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/dist/summernote.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/inbox.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/summernote/dist/summernote.js') }}"></script>
<script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
            popover: { image: [], link: [], air: [] }
        });
    });
</script>
@stop