@extends('layout.master')
@section('parentPageTitle', 'Widgets')
@section('title', 'Chart Widgets')

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
                <h2><strong>Project</strong> Survey</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu slideUp">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>                   
            <div class="body">                        
                <div class="row text-center">
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$145</h4>
                        <p class="text-muted margin-0"> Today's</p>
                    </div>
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$625</h4>
                        <p class="text-muted margin-0">This Week's</p>
                    </div>
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$3125</h4>
                        <p class="text-muted margin-0">This Month's</p>
                    </div>
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$4021</h4>
                        <p class="text-muted margin-0">This Year's</p>
                    </div>
                </div>
                <div id="area_chart" class="graph"></div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card overflowhidden">
            <div class="header">
                <h2><strong>Project</strong> A</h2>
            </div>
            <div class="body">
                <div class="d-flex bd-highlight">
                    <div class="flex-fill bd-highlight">
                        <span>Overall</span>
                        <h6>70.40%</h6>
                    </div>
                    <div class="flex-fill bd-highlight">
                        <span>Montly</span>
                        <h6>25.80%</h6>
                    </div>
                    <div class="flex-fill bd-highlight">
                        <span>Day</span>
                        <h6>12.50%</h6>
                    </div>
                </div>
            </div>
            <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px" data-line-Width="1" data-line-Color="#7868da"
                data-fill-Color="#7868da"> 6,1,3,3,6,3,2,2,8,2 </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card overflowhidden">
            <div class="header">
                <h2><strong>Project</strong> B</h2>
            </div>
            <div class="body">
                <div class="d-flex bd-highlight">
                    <div class="flex-fill bd-highlight">
                        <span>Overall</span>
                        <h6>70.40%</h6>
                    </div>
                    <div class="flex-fill bd-highlight">
                        <span>Montly</span>
                        <h6>25.80%</h6>
                    </div>
                    <div class="flex-fill bd-highlight">
                        <span>Day</span>
                        <h6>12.50%</h6>
                    </div>
                </div>
            </div>
            <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px" data-line-Width="1" data-line-Color="#f55c78"
                data-fill-Color="#f55c78"> 6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6 </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card overflowhidden">
            <div class="header">
                <h2><strong>Project</strong> C</h2>
            </div>
            <div class="body">
                <div class="d-flex bd-highlight">
                    <div class="flex-fill bd-highlight">
                        <span>Overall</span>
                        <h6>70.40%</h6>
                    </div>
                    <div class="flex-fill bd-highlight">
                        <span>Montly</span>
                        <h6>25.80%</h6>
                    </div>
                    <div class="flex-fill bd-highlight">
                        <span>Day</span>
                        <h6>12.50%</h6>
                    </div>
                </div>
            </div>
            <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px" data-line-Width="1" data-line-Color="#3aaaec)"
                data-fill-Color="#3aaaec"> 6,4,7,6,9,3,3,5,7,4,2,3,7,6 </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>User</strong> Survey</h2>
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
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-7">
                        <div id="m_area_chart" style="height: 280px;" ></div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="widget-user">
                            <img class="rounded-circle border border-primary" src="../assets/images/sm/avatar1.jpg" alt="">
                            <div class="wid-u-info">
                                <h5>Chadengle</h5>
                                <p class="text-muted m-b-0">info@wraptheme.com</p>
                                <small class="text-warning"><b>Admin</b></small>
                            </div>
                        </div>                                
                        <hr>
                        <div class="widget-user">
                            <img class="rounded-circle border border-success" src="../assets/images/sm/avatar2.jpg" alt="">
                            <div class="wid-u-info">
                                <h5>Damien Ritz</h5>
                                <p class="text-muted m-b-0">info@wraptheme.com</p>
                                <small class="text-warning"><b>UI UUX Designer</b></small>
                            </div>
                        </div>
                        <hr>
                        <div class="widget-user">
                            <img class="rounded-circle border border-warning" src="../assets/images/sm/avatar3.jpg" alt="">
                            <div class="wid-u-info">
                                <h5>Monica Ryther</h5>
                                <p class="text-muted m-b-0">info@wraptheme.com</p>
                                <small class="text-warning"><b>Developer</b></small>
                            </div>
                        </div>                                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Site</strong> A Report</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu slideUp">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body m-b-5 bg-dark">
                <div class="row text-center">
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0 col-white">$125</h4>
                        <p class="text-muted margin-0"> Today's</p>
                    </div>
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0 col-white">$1102</h4>
                        <p class="text-muted margin-0">This Week's</p>
                    </div>
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0 col-white">$5120</h4>
                        <p class="text-muted margin-0">This Month's</p>
                    </div>
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0 col-white">$8133</h4>
                        <p class="text-muted margin-0">This Year's</p>
                    </div>
                </div>
            </div>                    
            <div class="body">
                <div id="m_bar_chart" class="graph"></div>
            </div>                    
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card visitors-map">
            <div class="header">
                <h2><strong>Our</strong> Location</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu slideUp">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div id="world-map-markers" style="height:450px;"></div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <ul class="row location_list list-unstyled">
                            <li class="col-lg-2 col-md-4 col-6">
                                <div class="body xl-turquoise">
                                    <i class="zmdi zmdi-pin"></i>
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>America</span>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-4 col-6">
                                <div class="body xl-khaki">
                                    <i class="zmdi zmdi-pin"></i>
                                    <h4 class="number count-to" data-from="0" data-to="24" data-speed="2500" data-fresh-interval="700">24</h4>
                                    <span>Australia</span>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-4 col-6">
                                <div class="body xl-parpl">
                                    <i class="zmdi zmdi-pin"></i>
                                    <h4 class="number count-to" data-from="0" data-to="15" data-speed="2500" data-fresh-interval="700">15</h4>
                                    <span>Canada</span>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-4 col-6">
                                <div class="body xl-salmon">
                                    <i class="zmdi zmdi-pin"></i>
                                    <h4 class="number count-to" data-from="0" data-to="33" data-speed="2500" data-fresh-interval="700">33</h4>
                                    <span>India</span>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-4 col-6">
                                <div class="body xl-blue">
                                    <i class="zmdi zmdi-pin"></i>
                                    <h4 class="number count-to" data-from="0" data-to="8" data-speed="2500" data-fresh-interval="700">8</h4>
                                    <span>UK</span>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-4 col-6">
                                <div class="body xl-slategray">
                                    <i class="zmdi zmdi-pin"></i>
                                    <h4 class="number count-to" data-from="0" data-to="5" data-speed="2500" data-fresh-interval="700">5</h4>
                                    <span>Other</span>
                                </div>
                            </li>                      
                        </ul>
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12 col-lg-8">
        <div class="card visitors-map">
            <div class="header">
                <h2><strong>Visitors</strong> Statistics</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu slideUp">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div id="world-map-markers2" class="jvector-map m-b-5"></div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-sm-6">
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from america</span>
                            <div class="progress">
                                <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from Canada</span>
                            <div class="progress">
                                <div class="progress-bar l-coral" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from asia</span>
                            <div class="progress">
                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from america</span>
                            <div class="progress">
                                <div class="progress-bar l-salmon" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from Canada</span>
                            <div class="progress">
                                <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from asia</span>
                            <div class="progress">
                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Browser</strong> Usage</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu slideUp">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div id="donut_chart" class="dashboard-donut-chart"></div>
                <table class="table m-t-15 m-b-0">
                    <tbody>
                        <tr>                                   
                            <td>Chrome</td>
                            <td>6985</td>
                            <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Other</td>
                            <td>2697</td>
                            <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Safari</td>
                            <td>3597</td>
                            <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                        </tr>
                        <tr>
                            <td>Firefox</td>
                            <td>2145</td>
                            <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Opera</td>
                            <td>1854</td>
                            <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                        </tr>                               
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
@stop

@section('page-popup')

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/morrisjs/morris.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}">
@stop

@section('page-script')
<!-- Jquery DataTable Plugin Js --> 
<script src="{{ asset('assets/bundles/sparkline.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/morrisscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/charts/chart-widgets.js') }}"></script>
@stop