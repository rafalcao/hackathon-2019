@extends('layout.master')
@section('parentPageTitle', 'App')
@section('title', 'Blog Dashboard')

@section('sub-header')
<div class="col-lg-6 col-md-4 col-12 text-right">
    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
        <div class="sparkline" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#706bd1">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
        <small>Page Views</small>
    </div>
    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
        <div class="sparkline" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#2196f3">1,3,5,7,4,6,3,2,6,5,9,8,7,9,5</div>
        <small>Visitors</small>
    </div>
    <ul class="header-dropdown list-unstyled float-right mb-0">
        <li class="dropdown">
            <a href="javascript:void(0);" class="btn btn-primary btn-round dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
            <ul class="dropdown-menu dropdown-menu-right float-right">
                <li><a href="{{route('app.blogdashboard')}}" >Dashboard</a></li>
                <li><a href="{{route('app.blogpost')}}" >New Post</a></li>
                <li><a href="{{route('app.bloglist')}}" >Blog List</a></li>
                <li><a href="{{route('app.bloggrid')}}" >Blog Grid</a></li>
                <li><a href="{{route('app.blogdetails')}}">Blog Single</a></li>
            </ul>
        </li>
    </ul>
</div>
@stop

@section('content')
<div class="blog-page">
    <div class="row clearfix">
        <div class="col-lg-3 col-md-6">
            <div class="card l-blue">
                <div class="body">
                    <h4 class="m-t-0 m-b-0">2,048</h4>
                    <p class="m-b-0">Total Leads</p>
                    <div class="sparkline" data-type="line" data-spot-Radius="0"  data-offset="90" data-width="100%" data-height="40px" data-line-Width="1" data-line-Color="#fff"
                data-fill-Color="transparent"> 7,6,7,8,5,9,8,6,7 </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card l-parpl">
                <div class="body">
                    <h4 class="m-t-0 m-b-0">521</h4>
                    <p class="m-b-0 ">Total Connections</p>
                    <div class="sparkline" data-type="line" data-spot-Radius="0"  data-offset="90" data-width="100%" data-height="40px" data-line-Width="1" data-line-Color="#fff"
                data-fill-Color="transparent"> 6,5,7,4,5,3,8,6,5 </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card l-seagreen">
                <div class="body">
                    <h4 class="m-t-0 m-b-0">73</h4>
                    <p class="m-b-0 ">Articles</p>
                    <div class="sparkline" data-type="line" data-spot-Radius="0"  data-offset="90" data-width="100%" data-height="40px" data-line-Width="1" data-line-Color="#fff"
                data-fill-Color="transparent"> 8,7,7,5,5,4,8,7,5 </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card l-pink">
                <div class="body">
                    <h4 class="m-t-0 m-b-0">15</h4>
                    <p class="m-b-0">Categories</p>
                    <div class="sparkline" data-type="line" data-spot-Radius="0"  data-offset="90" data-width="100%" data-height="40px" data-line-Width="1" data-line-Color="#fff"
                data-fill-Color="transparent"> 7,6,7,8,5,9,8,6,7 </div>
                </div>
            </div>
        </div>
        </div>
    <div class="row clearfix">
        <div class="col-lg-7 col-md-12">
            <div class="card visitors-map">
                <div class="header">
                    <h2><strong>Visitors</strong> Statistics</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right float-right">
                                <li><a href="javascript:void(0);">Edit</a></li>
                                <li><a href="javascript:void(0);">Delete</a></li>
                                <li><a href="javascript:void(0);">Report</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>                        
                </div>
                <div class="body">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div id="world-map-markers" class="jvector-map"></div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="table-responsive">                                    
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr>
                                            <th>Contrary</th>
                                            <th>2016</th>
                                            <th>2017</th>
                                            <th>Change</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>USA</td>
                                            <td>2,009</td>
                                            <td>3,591</td>
                                            <td>7.01% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td>India</td>
                                            <td>1,129</td>
                                            <td>1,361</td>
                                            <td>3.01% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Canada</td>
                                            <td>2,009</td>
                                            <td>2,901</td>
                                            <td>9.01% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Australia</td>
                                            <td>954</td>
                                            <td>901</td>
                                            <td>5.71% <i class="zmdi zmdi-trending-down text-warning"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Other</td>
                                            <td>4,236</td>
                                            <td>4,591</td>
                                            <td>9.15% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                        </tr>                                            											
                                    </tbody>
                                </table>                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12">
            <div class="card">
                <div class="header">
                    <h2><strong>USA</strong> Categories Statistics</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right float-right">
                                <li><a href="javascript:void(0);">Edit</a></li>
                                <li><a href="javascript:void(0);">Delete</a></li>
                                <li><a href="javascript:void(0);">Report</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div id="usa" class="text-center" style="height: 400px"></div>
                    <div class="table-responsive">                            
                        <table class="table table-hover m-b-0">
                            <thead>
                                <tr>
                                    <th>Categories</th>
                                    <th>2016</th>
                                    <th>2017</th>
                                    <th>Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Web Design</td>
                                    <td>2,009</td>
                                    <td>3,591</td>
                                    <td>7.01% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Photography</td>
                                    <td>1,129</td>
                                    <td>1,361</td>
                                    <td>3.01% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Technology</td>
                                    <td>2,009</td>
                                    <td>2,901</td>
                                    <td>9.01% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Lifestyle</td>
                                    <td>954</td>
                                    <td>901</td>
                                    <td>5.71% <i class="zmdi zmdi-trending-down text-warning"></i></td>
                                </tr>
                                <tr>
                                    <td>Sports</td>
                                    <td>4,236</td>
                                    <td>4,591</td>
                                    <td>9.15% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12">
            <div class="card single_post">
                <div class="header">
                    <h2><strong>Latest</strong> Post</h2>
                    <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                </div>
                <div class="body">
                    <h3 class="m-t-0 m-b-5"><a href="blog-details.html">Apple Introduces Search Ads Basic</a></h3>
                    <ul class="meta">
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-amber"></i>Technology</a></li>
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li>
                    </ul>
                </div>                    
                <div class="body">
                    <div class="img-post m-b-15">
                        <img src="../assets/images/blog/blog-page-4.jpg" alt="Awesome Image">
                        <div class="social_share">                            
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                        </div>
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                    <a href="blog-details.html" title="read more" class="btn btn-round btn-info">Read More</a>                        
                </div>
            </div>                
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card single_post">
                <div class="header">
                    <h2><strong>Popular</strong> Post</h2>
                    <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                </div>
                <div class="body">
                    <h3 class="m-t-0 m-b-5"><a href="blog-details.html">Apple Introduces Search Ads Basic</a></h3>
                    <ul class="meta">
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-amber"></i>Technology</a></li>
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li>
                    </ul>
                </div>                    
                <div class="body">
                    <div class="img-post m-b-15">
                        <img src="../assets/images/blog/blog-page-3.jpg" alt="Awesome Image">
                        <div class="social_share">                            
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                        </div>
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                    <a href="blog-details.html" title="read more" class="btn btn-round btn-info">Read More</a>                        
                </div>
            </div>                
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card single_post">
                <div class="header">
                    <h2><strong>Most</strong> View</h2>
                    <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                </div>
                <div class="body">
                    <h3 class="m-t-0 m-b-5"><a href="blog-details.html">Apple Introduces Search Ads Basic</a></h3>
                    <ul class="meta">
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-amber"></i>Technology</a></li>
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li>
                    </ul>
                </div>                    
                <div class="body">
                    <div class="img-post m-b-15">
                        <img src="../assets/images/blog/blog-page-2.jpg" alt="Awesome Image">
                        <div class="social_share">                            
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                        </div>
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                    <a href="blog-details.html" title="read more" class="btn btn-round btn-info">Read More</a>                        
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
<link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/morrisjs/morris.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/blog/blog.js') }}"></script>
@stop