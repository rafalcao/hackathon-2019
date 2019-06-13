@extends('layout.master')
@section('parentPageTitle', 'Inbox')
@section('title', 'Compose')

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
    <button type="button" class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10" data-toggle="modal" data-target="#addevent">Add Events</button>
</div>
@stop

@section('sub-action-bar')

@stop

@section('content')
<div class="page-calendar">
    <div class="row clearfix">
        <div class="col-md-12 col-lg-7">
            <div class="card">
                <div class="body">
                    <button class="btn btn-sm btn-primary btn-round waves-effect" id="change-view-today">today</button>
                    <button class="btn btn-sm btn-default btn-simple btn-round waves-effect" id="change-view-day" >Day</button>
                    <button class="btn btn-sm btn-default btn-simple btn-round waves-effect" id="change-view-week">Week</button>
                    <button class="btn btn-sm btn-default btn-simple btn-round waves-effect" id="change-view-month">Month</button>
                    <div id="calendar" class="m-t-20"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-5">
            <div class="card">
            <div class="body">
                <div class="event-name b-primary row">
                    <div class="col-3 text-center">
                        <h4>11<span>Dec</span><span>2017</span></h4>
                    </div>
                    <div class="col-9">
                        <h6>Conference</h6>
                        <p>Mobile World Congress 2018</p>
                        <address><i class="zmdi zmdi-pin"></i> 71 Pilgrim Avenue Chevy Chase, MD 20815</address>
                    </div>
                </div>
                <div class="event-name b-primary row">
                    <div class="col-3 text-center">
                        <h4>13<span>Dec</span><span>2017</span></h4>
                    </div>
                    <div class="col-9">
                        <h6>Birthday</h6>
                        <p>Today, guests are getting in on the action</p>
                        <address><i class="zmdi zmdi-pin"></i> 4 Goldfield Rd. Honolulu, HI 96815</address>
                    </div>
                </div>
                <hr>                    
                <div class="event-name b-lightred row">
                    <div class="col-3 text-center">
                        <h4>09<span>Dec</span><span>2017</span></h4>
                    </div>
                    <div class="col-9">
                        <h6>Repeating Event</h6>
                        <p>Before there were tech conferences, there was Disrupt.</p>
                        <address><i class="zmdi zmdi-pin"></i> 44 Shirley Ave. West Chicago, IL 60185</address>
                    </div>
                </div>
                <hr>
                <div class="event-name b-greensea row">
                    <div class="col-3 text-center">
                        <h4>16<span>Dec</span><span>2017</span></h4>
                    </div>
                    <div class="col-9">
                        <h6>Repeating Event</h6>
                        <p>It is a long established fact that a reader will be distracted</p>
                        <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                    </div>
                </div>
                <div class="event-name b-greensea row">
                    <div class="col-3 text-center">
                        <h4>28<span>Dec</span><span>2017</span></h4>
                    </div>
                    <div class="col-9">
                        <h6>Google</h6>
                        <p>Google Hardware and Pixel 2 Launch</p>
                        <address><i class="zmdi zmdi-pin"></i> 514 S. Magnolia St. Orlando, FL 32806</address>
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
<!-- Default Size -->
<div class="modal fade" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Add Event</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-line">
                        <input type="number" class="form-control" placeholder="Event Date">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="Event Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea class="form-control no-resize" placeholder="Event Description..."></textarea>
                    </div>
                </div>       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round waves-effect">Add</button>
                <button type="button" class="btn btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/fullcalendarscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/calendar/calendar.js') }}"></script>
@stop