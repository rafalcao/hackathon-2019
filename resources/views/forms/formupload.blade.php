@extends('layout.master')
@section('parentPageTitle', 'Forms')
@section('title', 'File Upload')


@section('content')
<!-- File Upload | Drag & Drop OR With Click & Choose -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>File Upload</strong> Drag & Drop OR With Click & Choose <small>Taken from <a href="http://www.dropzonejs.com/" target="_blank">www.dropzonejs.com</a></small> </h2>
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
                <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                    <div class="dz-message">
                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                        <h4>Drop files here or click to upload.</h4>
                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# File Upload | Drag & Drop OR With Click & Choose --> 
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/dropzone/dropzone.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/plugins/dropzone/dropzone.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop