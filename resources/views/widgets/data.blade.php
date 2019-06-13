@extends('layout.master')
@section('parentPageTitle', 'Widgets')
@section('title', 'Data Widgets')

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
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <div class="chart chart-pie">30, 35, 25, 8</div>
                </div>
                <div class="content">
                    <div class="text">USAGE</div>
                    <div class="number">98%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                </div>
                <div class="content">
                    <div class="text">IMPRESSIONS</div>
                    <div class="number">457 512</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                </div>
                <div class="content">
                    <div class="text">TOTAL SALES</div>
                    <div class="number">$125 543</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                </div>
                <div class="content">
                    <div class="text">CURRENCY</div>
                    <div class="number">$1 063</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
        <div class="card overflowhidden">
            <div class="body">
                <h2 class="number count-to m-t-0 m-b-5" data-from="0" data-to="501" data-speed="1000" data-fresh-interval="700">501</h2>
                <p class="text-muted">Orders Received</p>                        
            </div>
            <span id="linecustom1">1,4,2,6,5,2,3,8,5,2</span>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
        <div class="card overflowhidden">
            <div class="body">
                <h2 class="number count-to m-t-0 m-b-5" data-from="0" data-to="2501" data-speed="2000" data-fresh-interval="700">2501</h2>
                <p class="text-muted ">Total Sales</p>                        
            </div>
            <span id="linecustom2">2,9,5,5,8,5,4,2,6</span>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
        <div class="card overflowhidden">
            <div class="body">
                <h2 class="number count-to m-t-0 m-b-5" data-from="0" data-to="6051" data-speed="2000" data-fresh-interval="700">6051</h2>
                <p class="text-muted">Total Profit</p>                        
            </div>
            <span id="linecustom3">1,5,3,6,6,3,6,8,4,2</span>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-7">
                        <h5 class="m-t-0">Server</h5>
                        <small class="text-small">6% higher than last month</small>
                    </div>
                    <div class="col-5 text-right">
                        <h2 class="m-b-0">62%</h2>
                        <small class="info">of 1Tb</small>
                    </div>
                    <div class="col-12">
                        <div class="progress m-t-20">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-7">
                        <h5 class="m-t-0">Traffic</h5>
                        <small class="text-small">4% higher than last month</small>
                    </div>
                    <div class="col-5 text-right">
                        <h2 class="m-b-0">78</h2>
                        <small class="info">of 1Tb</small>
                    </div>
                    <div class="col-12">
                        <div class="progress m-t-20">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-7">
                        <h5 class="m-t-0">Email</h5>
                        <small class="text-small">Total Registered email</small>
                    </div>
                    <div class="col-5 text-right">
                        <h2 class="m-b-0">31</h2>
                        <small class="info">of 100</small>
                    </div>
                    <div class="col-12">
                        <div class="progress m-t-20" >
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-7">
                        <h5 class="m-t-0">Domians</h5>
                        <small class="text-small">Total registered Domain</small>
                    </div>
                    <div class="col-5 text-right">
                        <h2 class="m-b-0">2</h2>
                        <small class="info">of 10</small>
                    </div>
                    <div class="col-12">
                        <div class="progress m-t-20">
                        <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card tasks_report">
            <div class="header">
                <h2><strong>Total</strong> Revenue</h2>                        
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">2017 Year</a></li>
                            <li><a href="javascript:void(0);">2016 Year</a></li>
                            <li><a href="javascript:void(0);">2015 Year</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="m-b-10 l-blue">
                    <div class="body">
                        <h4 class="m-t-0 m-b-0">2,048</h4>
                        <p class="m-b-0">Total Leads</p>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="0" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                    data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                    data-offset="90" data-width="100%" data-height="45px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                    data-fill-Color="rgba(255, 255, 255, 0.3)"> 7,6,7,8,5,9,8,6,7 </div>
                </div>
                <div class="m-b-10 l-parpl">
                    <div class="body">
                        <h4 class="m-t-0 m-b-0">521</h4>
                        <p class="m-b-0 ">Total Connections</p>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="0" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                    data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                    data-offset="90" data-width="100%" data-height="45px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                    data-fill-Color="rgba(255, 255, 255, 0.3)"> 6,5,7,4,5,3,8,6,5 </div>
                </div>
                <div class="l-seagreen">
                    <div class="body">
                        <h4 class="m-t-0 m-b-0">73</h4>
                        <p class="m-b-0 ">Articles</p>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="0" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                    data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                    data-offset="90" data-width="100%" data-height="45px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                    data-fill-Color="rgba(255, 255, 255, 0.3)"> 8,7,7,5,5,4,8,7,5 </div>
                </div>
            </div>
        </div>
    </div>            
    <div class="col-lg-4 col-md-6">
        <div class="card bg-dark">
            <div class="header">
                <h2><strong>Sales</strong> Report</h2>
            </div>
            <div class="body">
                <div class="body bg-white">
                    <h6>USA</h6>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 col-4">
                            <small class="text-muted">Today</small>
                            <h5 class="m-b-0">256</h5>                                
                        </div>
                        <div class="col-sm-4 col-4">
                            <small class="text-muted">This Week</small>
                            <h5 class="m-b-0">621</h5>                                
                        </div>
                        <div class="col-sm-4 col-4">
                            <small class="text-muted">This Month</small>
                            <h5 class="m-b-0">981</h5>                                
                        </div>
                    </div>
                </div>
                <div class="body m-t-10 bg-white">
                    <h6>India</h6>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 col-4">
                            <small class="text-muted">Today</small>
                            <h5 class="m-b-0">256</h5>                                
                        </div>
                        <div class="col-sm-4 col-4">
                            <small class="text-muted">This Week</small>
                            <h5 class="m-b-0">621</h5>                                
                        </div>
                        <div class="col-sm-4 col-4">
                            <small class="text-muted">This Month</small>
                            <h5 class="m-b-0">981</h5>                                
                        </div>
                    </div>
                </div>
                <div class="body m-t-10 bg-white">
                    <h6>Europe</h6>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 col-4">
                            <small class="text-muted">Today</small>
                            <h5 class="m-b-0">256</h5>                                
                        </div>
                        <div class="col-sm-4 col-4">
                            <small class="text-muted">This Week</small>
                            <h5 class="m-b-0">621</h5>                                
                        </div>
                        <div class="col-sm-4 col-4">
                            <small class="text-muted">This Month</small>
                            <h5 class="m-b-0">981</h5>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card bg-dark">
            <div class="body">
                <h3 class="m-b-0 col-white">71,524</h3>
                <small class="displayblock text-muted">PAGE VISITS<i class="zmdi zmdi-trending-up"></i></small>
                <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="#cdfa7e" data-highlight-Line-Color="#222"
                data-min-Spot-Color="#f7bb97" data-max-Spot-Color="#edbae7" data-spot-Color="#86f0ff" data-offset="90" data-width="100%"
                data-height="60px" data-line-Width="1" data-line-Color="#424b5a" data-fill-Color="transparent"> 1,2,3,1,4,3,6,4,4,1</div>
            </div>
        </div>
        <div class="card bg-dark">
            <div class="body">
                <h3 class="m-b-0 col-white">39,657</h3>
                <small class="displayblock text-muted">EARNINGS<i class="zmdi zmdi-trending-up"></i></small>
                <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="#cdfa7e" data-highlight-Line-Color="#222"
                data-min-Spot-Color="#f7bb97" data-max-Spot-Color="#edbae7" data-spot-Color="#86f0ff" data-offset="90" data-width="100%"
                data-height="60px" data-line-Width="1" data-line-Color="#424b5a" data-fill-Color="transparent">4,2,4,3,1,7,5,2,1,4</div>
            </div>
        </div>
        <div class="card bg-dark">
            <div class="body">
                <h3 class="m-b-0 col-white">45,183</h3>
                <small class="displayblock text-muted">PAGE VISITS<i class="zmdi zmdi-trending-up"></i></small>
                <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="#cdfa7e" data-highlight-Line-Color="#222"
                data-min-Spot-Color="#f7bb97" data-max-Spot-Color="#edbae7" data-spot-Color="#86f0ff" data-offset="90" data-width="100%"
                data-height="60px" data-line-Width="1" data-line-Color="#424b5a" data-fill-Color="transparent">1,8,2,2,5,3,8,1,4</div>
            </div>
        </div>
    </div>
</div>        
<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
        <div class="card tasks_report">
            <div class="body">
                <input type="text" class="knob" data-skin="tron" value="66" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#26dad2" readonly>                        
                <h6 class="m-t-20">Satisfaction Rate</h6>
                <p class="displayblock m-b-0">47% Average <i class="zmdi zmdi-trending-up"></i></p>                        
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
        <div class="card tasks_report">
            <div class="body">
                <input type="text" class="knob dial2" value="26" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#7b69ec" readonly>
                <h6 class="m-t-20">Project Panding</h6>
                <p class="displayblock m-b-0">13% Average <i class="zmdi zmdi-trending-down"></i></p>
                
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
        <div class="card tasks_report">
            <div class="body">
                <input type="text" class="knob dial3" value="76" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#f9bd53" readonly>
                <h6 class="m-t-20">Productivity Goal</h6>
                <p class="displayblock m-b-0">75% Average <i class="zmdi zmdi-trending-up"></i></p>
                
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
        <div class="card tasks_report">
            <div class="body">
                <input type="text" class="knob dial4" value="88" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#00adef" readonly>
                <h6 class="m-t-20">Total Revenue</h6>
                <p class="displayblock m-b-0">54% Average <i class="zmdi zmdi-trending-up"></i></p>
                
            </div>
        </div>
    </div>            
</div>
@stop

@section('page-popup')

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('') }}">
@stop

@section('page-script')
<!-- Jquery DataTable Plugin Js --> 
<script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/widgets/infobox/infobox-1.js') }}"></script>
<script src="{{ asset('assets/js/pages/charts/jquery-knob.js') }}"></script>
<script src="{{ asset('assets/js/pages/cards/basic.js') }}"></script>
@stop