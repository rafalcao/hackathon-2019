@extends('layout.master')
@section('parentPageTitle', 'App')
@section('title', 'Blog List')

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
    <div class="col-lg-8 col-md-12 left-box">
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
                    <img class="d-block img-fluid" src="../assets/images/blog/blog-page-1.jpg" alt="First slide">
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
        <ul class="pagination pagination-primary">
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
        </ul>                
    </div>
    <div class="col-lg-4 col-md-12 right-box">
        <div class="card">
            <div class="body search">
                <div class="input-group m-b-0">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-search"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Categories</strong> Clouds</h2>
            </div>
            <div class="body widget">
                <ul class="list-unstyled categories-clouds m-b-0">
                    <li><a href="javascript:void(0);">eCommerce</a></li>
                    <li><a href="javascript:void(0);">Microsoft Technologies</a></li>
                    <li><a href="javascript:void(0);">Creative UX</a></li>
                    <li><a href="javascript:void(0);">Wordpress</a></li>
                    <li><a href="javascript:void(0);">Angular JS</a></li>
                    <li><a href="javascript:void(0);">Enterprise Mobility</a></li>
                    <li><a href="javascript:void(0);">Website Design</a></li>
                    <li><a href="javascript:void(0);">HTML5</a></li>
                    <li><a href="javascript:void(0);">Infographics</a></li>
                    <li><a href="javascript:void(0);">Wordpress Development</a></li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Popular</strong> Posts</h2>                        
            </div>
            <div class="body widget popular-post">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="single_post">
                            <div class="img-post m-b-5">
                                <img src="../assets/images/blog/blog-page-2.jpg" alt="Awesome Image">                                        
                            </div>
                            <p class="m-b-0">Apple Introduces Search Ads Basic</p>
                            <small class="text-muted">Dec 22, 2017</small>
                        </div>
                        <div class="single_post m-t-20">
                            <div class="img-post m-b-5">
                                <img src="../assets/images/blog/blog-page-3.jpg" alt="Awesome Image">                                            
                            </div>
                            <p class="m-b-0">new rules, more cars, more races</p>
                            <small class="text-muted">Dec 20, 2017</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Instagram</strong> Post</h2>
            </div>
            <div class="body widget">
                <ul class="list-unstyled instagram-plugin m-b-0">
                    <li><a href="javascript:void(0);"><img src="../assets/images/blog/05-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/images/blog/06-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/images/blog/07-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/images/blog/08-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/images/blog/09-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/images/blog/10-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/images/blog/11-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/images/blog/12-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/images/blog/13-img.jpg" alt="image description"></a></li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Email</strong> Newsletter <small>Get our products/news earlier than others, let’s get in touch.</small></h2>
            </div>
            <div class="body widget newsletter">                        
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Email">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-mail-send"></i>
                    </span>
                </div>
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