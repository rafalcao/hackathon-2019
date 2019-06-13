@extends('layout.master')
@section('parentPageTitle', 'App')
@section('title', 'Contact')

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
    <button type="button" class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10" data-toggle="modal" data-target="#addcontact">Add New</button>
</div>
@stop

@section('sub-action-bar')

@stop

@section('content')
<div class="row clearfix contact">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="chart easy-pie-chart-1" data-percent="75"> <span><img src="../assets/images/sm/avatar1.jpg" alt="user" class="rounded-circle"/></span> </div>
                <h6>John Smith</h6>
                <ul class="social-links list-unstyled">
                    <li><a title="facebook"href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                    <li><a title="twitter"href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a title="instagram"href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                </ul>
                <small>795 Folsom Ave, Suite 600 San Francisco,<br> CADGE 94107</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="chart easy-pie-chart-1" data-percent="67"> <span><img src="../assets/images/sm/avatar2.jpg" alt="user" class="rounded-circle"/></span> </div>
                <h6>Hossein Shams</h6>
                <ul class="social-links list-unstyled">
                    <li><a title="google-plus"href="javascript:void(0);"><i class="zmdi zmdi-google-plus-box"></i></a></li>
                    <li><a title="twitter"href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a title="linkedin"href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                </ul>
                <small>795 Folsom Ave, Suite 600 San Francisco,<br> CADGE 94107</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="chart easy-pie-chart-1" data-percent="23"> <span><img src="../assets/images/sm/avatar3.jpg" alt="user" class="rounded-circle"/></span> </div>
                <h6>Maryam Amiri</h6>
                <ul class="social-links list-unstyled">
                    <li><a title="facebook"href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                    <li><a title="twitter"href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a title="instagram"href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                </ul>
                <small>795 Folsom Ave, Suite 600 San Francisco,<br> CADGE 94107</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="chart easy-pie-chart-1" data-percent="49"> <span><img src="../assets/images/sm/avatar4.jpg" alt="user" class="rounded-circle"/></span> </div>
                <h6>Tim Hank</h6>
                <ul class="social-links list-unstyled">
                    <li><a title="linkedin"href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                    <li><a title="twitter"href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a title="instagram"href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                </ul>
                <small>795 Folsom Ave, Suite 600 San Francisco,<br> CADGE 94107</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="chart easy-pie-chart-1" data-percent="75"> <span><img src="../assets/images/sm/avatar5.jpg" alt="user" class="rounded-circle"/></span> </div>
                <h6>John Smith</h6>
                <ul class="social-links list-unstyled">
                    <li><a title="facebook"href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                    <li><a title="twitter"href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a title="instagram"href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                </ul>
                <small>795 Folsom Ave, Suite 600 San Francisco,<br> CADGE 94107</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="chart easy-pie-chart-1" data-percent="88"> <span><img src="../assets/images/sm/avatar1.jpg" alt="user" class="rounded-circle"/></span> </div>
                <h6>Frank Camly</h6>
                <ul class="social-links list-unstyled">
                    <li><a title="google-plus"href="javascript:void(0);"><i class="zmdi zmdi-google-plus-box"></i></a></li>
                    <li><a title="twitter"href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a title="linkedin"href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                </ul>
                <small>795 Folsom Ave, Suite 600 San Francisco,<br> CADGE 94107</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="chart easy-pie-chart-1" data-percent="37"> <span><img src="../assets/images/sm/avatar2.jpg" alt="user" class="rounded-circle"/></span> </div>
                <h6>Gary Camara</h6>
                <ul class="social-links list-unstyled">
                    <li><a title="facebook"href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                    <li><a title="twitter"href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a title="instagram"href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                </ul>
                <small>795 Folsom Ave, Suite 600 San Francisco,<br> CADGE 94107</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="chart easy-pie-chart-1" data-percent="79"> <span><img src="../assets/images/sm/avatar6.jpg" alt="user" class="rounded-circle"/></span> </div>
                <h6>Fidel Tonn</h6>
                <ul class="social-links list-unstyled">
                    <li><a title="linkedin"href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                    <li><a title="twitter"href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a title="instagram"href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                </ul>
                <small>795 Folsom Ave, Suite 600 San Francisco,<br> CADGE 94107</small>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-popup')
<!-- Default Size -->
<div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Contact</h6>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-6">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">                                    
                            <input type="number" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="Enter Address">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">                                            
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                        <hr>
                    </div>
                    <div class="col-6">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="Facebook">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="Twitter">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="Linkedin">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="instagram">
                        </div>
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
<link rel="stylesheet" href="{{ asset('assets/plugins/footable-bootstrap/css/footable.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/footable-bootstrap/css/footable.standalone.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/easypiechart.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop