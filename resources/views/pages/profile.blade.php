@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Profile')

@section('sub-header')
<div class="col-lg-6 col-md-12 col-sm-12">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#overview">Overview</a></li>
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#schedule">Schedule</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Settings</a></li>
    </ul>
</div>
@stop

@section('content')
<div class="row clearfix profile-page">
    <div class="col-lg-12 col-md-12">
        <div class="card active-bg text-white">
            <div class="body profile-header">
                <img src="../assets/images/profile_av.jpg" class="user_pic rounded img-raised" alt="User">
                <div class="detail">
                    <div class="u_name">
                        <h4><strong>Alizee</strong> Thomas</h4>
                        <span>Sr. Meneger</span>
                    </div>
                    <div id="m_area_chart"></div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane" id="overview">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card text-center">
                            <div class="body">
                                <i class="zmdi zmdi-thumb-up zmdi-hc-2x"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="1203" data-speed="1000" data-fresh-interval="700">1203</h5>
                                <small>Likes</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card text-center">
                            <div class="body">                            
                                <i class="zmdi zmdi-comment-text zmdi-hc-2x"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="324" data-speed="1000" data-fresh-interval="700">324</h5>
                                <small>Comments</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card text-center">
                            <div class="body">
                                <i class="zmdi zmdi-eye zmdi-hc-2x"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="1980" data-speed="1000" data-fresh-interval="700">1980</h5>
                                <small>Views</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card text-center">
                            <div class="body">
                                <i class="zmdi zmdi-attachment zmdi-hc-2x"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="52" data-speed="1000" data-fresh-interval="700">52</h5>
                                <small>Attachment</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Info</strong></h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <small class="text-muted">Address: </small>
                                <p>795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                                <div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1923731.7533500232!2d-120.39098936853455!3d37.63767091877441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522391841133" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                <hr>
                                <small class="text-muted">Email address: </small>
                                <p>michael@gmail.com</p>
                                <hr>
                                <small class="text-muted">Phone: </small>
                                <p>+ 202-555-9191</p>
                                <hr>
                                <small class="text-muted">Mobile: </small>
                                <p>+ 202-555-2828</p>
                                <hr>
                                <small class="text-muted">Birth Date: </small>
                                <p class="m-b-0">October 22th, 1990</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2><strong>Who</strong> to follow</h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul class="follow_us list-unstyled m-b-0">
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Chris Fox</span>
                                                    <span class="message">Designer, Blogger</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>                            
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Joge Lucky</span>
                                                    <span class="message">Java Developer</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>                            
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Isabella</span>
                                                    <span class="message">CEO, Thememakker</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>                            
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Folisise Chosielie</span>
                                                    <span class="message">Art director, Movie Cut</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>                            
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Alexander</span>
                                                    <span class="message">Writter, Mag Editor</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>                            
                                    </li>                        
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Add</strong> Post</h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="blog-post.html">New Post</a></li>
                                            <li><a href="blog-details.html">Post Detail</a></li>
                                            <li><a href="blog-dashboard.html">Dashboard</a></li>
                                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body m-b-10">
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                </div>
                                <div class="post-toolbar-b">
                                    <button class="btn btn-warning btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-attachment"></i></button>
                                    <button class="btn btn-warning btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-camera"></i></button>
                                    <button class="btn btn-primary btn-round">Post</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <div class="post-img">
                                    <img src="../assets/images/image1.jpg" class="img-fluid" alt="">
                                </div>                                
                                <h5 class="m-t-20 m-b-0 post_title">It is a long established fact that a be distracted</h5>                                
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>                                
                                <div class="form-group m-b-0">
                                    <button class="btn btn-info btn-round">Like 5</button>
                                    <button class="btn btn-primary btn-simple btn-round">Reply</button>
                                    <span class="date m-l-20"><i class="zmdi zmdi-alarm"></i> 7min ago</span>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane page-calendar active" id="schedule">
                <div class="row clearfix text-center">
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card">
                            <div class="body">
                                <input type="text" class="knob" value="22" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#49c5b6">
                                <h6>Events</h6>
                                <span>12 of this month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card">
                            <div class="body">
                                <input type="text" class="knob" value="78" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#2196f3">
                                <h6>Birthday</h6>
                                <span>4 of this month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card">
                            <div class="body">
                                <input type="text" class="knob" value="66" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#f44336">
                                <h6>Conferences</h6>
                                <span>8 of this month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card">
                            <div class="body">
                                <input type="text" class="knob" value="50" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#4caf50">
                                <h6>Seminars</h6>
                                <span>2 of this month</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="body">
                                <div class="event-name b-lightred row">
                                    <div class="col-3 text-center">
                                        <h4>09<span>Dec</span><span>2017</span></h4>
                                    </div>
                                    <div class="col-9">
                                        <h6>Repeating Event</h6>
                                        <p>It is a long established fact that a reader will be distracted</p>
                                        <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
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
                                <hr>
                                <div class="event-name row">
                                    <div class="col-3 text-center">
                                        <h4>28<span>Dec</span><span>2017</span></h4>
                                    </div>
                                    <div class="col-9">
                                        <h6>Google</h6>
                                        <p>It is a long established fact that a reader will be distracted</p>
                                        <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                    </div>
                                </div>
                                <div class="event-name row">
                                    <div class="col-3 text-center">
                                        <h4>13<span>Dec</span><span>2017</span></h4>
                                    </div>
                                    <div class="col-9">
                                        <h6>Birthday</h6>
                                        <p>It is a long established fact that a reader will be distracted</p>
                                        <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                    </div>
                                </div>
                                <div class="event-name row">
                                    <div class="col-3 text-center">
                                        <h4>11<span>Dec</span><span>2017</span></h4>
                                    </div>
                                    <div class="col-9">
                                        <h6>Conference</h6>
                                        <p>It is a long established fact that a reader will be distracted</p>
                                        <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-round btn-primary m-t-15" data-toggle="modal" data-target="#addevent">Add Events</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="card">                                    
                            <div class="body">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="usersettings">
                <div class="card">
                    <div class="header">
                        <h2><strong>Security</strong> Settings</h2>
                    </div>
                    <div class="body">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password">
                        </div>
                        <button class="btn btn-info btn-round">Save Changes</button>                               
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Account</strong> Settings</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>                                    
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <input id="procheck1" type="checkbox">
                                    <label for="procheck1">Profile Visibility For Everyone</label>
                                </div>
                                <div class="checkbox">
                                    <input id="procheck2" type="checkbox">
                                    <label for="procheck2">New task notifications</label>
                                </div>
                                <div class="checkbox">
                                    <input id="procheck3" type="checkbox">
                                    <label for="procheck3">New friend request notifications</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-round">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-popup')
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
<link rel="stylesheet" href="{{ asset('assets/plugins/morrisjs/morris.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/morrisscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/fullcalendarscripts.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/charts/jquery-knob.js') }}"></script>
<script src="{{ asset('assets/js/pages/calendar/calendar.js') }}"></script>
<script src="{{ asset('assets/js/pages/profile.js') }}"></script>
@stop