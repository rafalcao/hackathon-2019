@extends('layout.master')
@section('parentPageTitle', 'App')
@section('title', 'Blog Grid Style')

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
<div class="row clearfix blog-page">
    <div class="col-lg-6 col-md-12">
        <div class="card single_post">
            <div class="body">
                <h3 class="m-t-0 m-b-5"><a href="blog-details.html">WTCR from 2018: new rules, more cars, more races</a></h3>
                <ul class="meta">
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-lime"></i>Sports</a></li>
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
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                <a href="blog-details.html" title="read more" class="btn btn-round btn-info">Read More</a>                        
            </div>
        </div>
    </div> 
    <div class="col-lg-6 col-md-12">
        <div class="card single_post">
            <div class="body">
                <h3 class="m-t-0 m-b-5"><a href="blog-details.html">CSS Timeline Examples from CodePen</a></h3>
                <ul class="meta">
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-green"></i>Web Design</a></li>
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
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                <a href="blog-details.html" title="read more" class="btn btn-round btn-info">Read More</a>                        
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-12 col-md-12">
            <div class="card single_post">
            <div class="body">
                <h3 class="m-t-0 m-b-5"><a href="blog-details.html">All photographs are accurate. None of them is the truth</a></h3>
                <ul class="meta">
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-red"></i>Photography</a></li>
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li>
                </ul>
            </div>                    
            <div class="body">
                <div class="img-post m-b-15">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="../assets/images/blog/blog-page-1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="../assets/images/blog/blog-page-2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="../assets/images/blog/blog-page-3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
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
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card single_post">
                    <div class="body">
                        <h3 class="m-t-0 m-b-5"><a href="blog-details.html">WTCR from 2018: new rules, more cars, more races</a></h3>
                        <ul class="meta">
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-lime"></i>Sports</a></li>
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
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                        <a href="blog-details.html" title="read more" class="btn btn-round btn-info">Read More</a>                        
                    </div>
                </div>
            </div> 
            <div class="col-lg-6 col-md-12">
                <div class="card single_post">
                    <div class="body">
                        <h3 class="m-t-0 m-b-5"><a href="blog-details.html">CSS Timeline Examples from CodePen</a></h3>
                        <ul class="meta">
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-green"></i>Web Design</a></li>
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
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                        <a href="blog-details.html" title="read more" class="btn btn-round btn-info">Read More</a>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-md-12">
        <div class="card single_post">
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
            <div class="card single_post">
            <div class="body">
                <h3 class="m-t-0 m-b-5"><a href="blog-details.html">All photographs are accurate. None of them is the truth</a></h3>
                <ul class="meta">
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-red"></i>Photography</a></li>
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li>
                </ul>
            </div>                    
            <div class="body">
                <div class="img-post m-b-15">
                    <img src="../assets/images/blog/blog-page-1.jpg" alt="Awesome Image">
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
@stop


@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop