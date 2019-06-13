@extends('layout.master')
@section('parentPageTitle', 'Inbox')
@section('title', 'Inbox List')

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
@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-xl-12">
        <div class="card chat-app">
            <div id="plist" class="people-list">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-search"></i>
                    </span>
                </div>
                <ul class="chat-list list-unstyled m-b-0">
                    <li class="clearfix">
                        <img src="../assets/images/xs/avatar1.jpg" alt="avatar" />
                        <div class="about">
                            <div class="name">Vincent Porter</div>
                            <div class="status"> <i class="zmdi zmdi-circle offline"></i> left 7 mins ago </div>                                            
                        </div>
                    </li>
                    <li class="clearfix active">
                        <img src="../assets/images/xs/avatar2.jpg" alt="avatar" />
                        <div class="about">
                            <div class="name">Aiden Chavez</div>
                            <div class="status"> <i class="zmdi zmdi-circle online"></i> online </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <img src="../assets/images/xs/avatar3.jpg" alt="avatar" />
                        <div class="about">
                            <div class="name">Mike Thomas</div>
                            <div class="status"> <i class="zmdi zmdi-circle online"></i> online </div>
                        </div>
                    </li>                                    
                    <li class="clearfix">
                        <img src="../assets/images/xs/avatar7.jpg" alt="avatar" />
                        <div class="about">
                            <div class="name">Christian Kelly</div>
                            <div class="status"> <i class="zmdi zmdi-circle offline"></i> left 10 hours ago </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <img src="../assets/images/xs/avatar8.jpg" alt="avatar" />
                        <div class="about">
                            <div class="name">Monica Ward</div>
                            <div class="status"> <i class="zmdi zmdi-circle online"></i> online </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <img src="../assets/images/xs/avatar9.jpg" alt="avatar" />
                        <div class="about">
                            <div class="name">Dean Henry</div>
                            <div class="status"> <i class="zmdi zmdi-circle offline"></i> offline since Oct 28 </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="chat">
                <div class="chat-header clearfix">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="../assets/images/xs/avatar2.jpg" alt="avatar" />
                            <div class="chat-about">
                                <h6 class="m-b-0">Aiden Chavez</h6>
                                <small>Last seen: 2 hours ago</small>
                            </div>
                        </div>
                        <div class="col-lg-6 hidden-sm text-right">
                            <a href="javascript:void(0);" class="btn btn-sm btn-simple"><i class="icon-camera"></i></a>
                            <a href="javascript:void(0);" class="btn btn-sm btn-simple"><i class="icon-camcorder"></i></a>
                            <a href="javascript:void(0);" class="btn btn-sm btn-simple"><i class="icon-settings"></i></a>
                            <a href="javascript:void(0);" class="btn btn-sm btn-simple"><i class="icon-question"></i></a>
                        </div>
                    </div>
                </div>
                <div class="chat-history">
                    <ul class="m-b-0">
                        <li class="clearfix">
                            <div class="message-data text-right">
                                <span class="message-data-time" >10:10 AM, Today</span>
                                <img src="../assets/images/xs/avatar7.jpg" alt="avatar">
                            </div>
                            <div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>
                        </li>
                        <li class="clearfix">
                            <div class="message-data">
                                <span class="message-data-time">10:12 AM, Today</span>
                            </div>
                            <div class="message my-message">Are we meeting today?</div>                                    
                        </li>                               
                        <li class="clearfix">
                            <div class="message-data">
                                <span class="message-data-time">10:15 AM, Today</span>
                            </div>
                            <div class="message my-message">Project has been already finished and I have results to show you.</div>
                        </li>
                    </ul>
                </div>
                <div class="chat-message clearfix">
                    <div class="input-group m-b-0">
                        <input type="text" class="form-control" placeholder="Enter text here...">
                        <span class="input-group-addon"><i class="zmdi zmdi-mail-send"></i></span>
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
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/css/chatapp.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop