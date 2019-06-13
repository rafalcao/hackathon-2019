@extends('layout.master')
@section('parentPageTitle', 'Ui')
@section('title', 'Alerts')

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
                <h2><strong>Basic Bootstrap</strong> Alerts
                    <small>Wrap any text and an optional dismiss button in <code>.alert</code> and one of the four contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</small>
                </h2>
            </div>
            <div class="body">
                <div class="alert alert-success">
                    <strong>Well done!</strong> You successfully read this important alert message.
                </div>
                <div class="alert alert-info">
                    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                </div>
                <div class="alert alert-warning">
                    <strong>Warning!</strong> Better check yourself, you're not looking too good.
                </div>
                <div class="alert alert-danger">
                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Links</strong> in Alerts
                    <small>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</small>
                </h2>
            </div>
            <div class="body">
                <div class="alert alert-success">
                    <strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message</a>.
                </div>
                <div class="alert alert-info">
                    <strong>Heads up!</strong> This <a href="javascript:void(0);" class="alert-link">alert needs your attention</a>, but it's not super important.
                </div>
                <div class="alert alert-warning">
                    <strong>Warning!</strong> Better check yourself, you're <a href="javascript:void(0);" class="alert-link">not looking too good</a>.
                </div>
                <div class="alert alert-danger">
                    <strong>Oh snap!</strong> <a href="javascript:void(0);" class="alert-link">Change a few things up</a> and try submitting again.
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
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop