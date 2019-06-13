@extends('layout.master')
@section('parentPageTitle', 'Ecommerce')
@section('title', 'Products')

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

@section('content')
<div class="row clearfix">
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card product_item">
            <div class="body">
                <div class="cp_img">
                    <img src="../assets/images/ecommerce/1.png" alt="Product" class="img-fluid" />
                    <div class="hover">
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="product_details">
                    <h5><a href="ec-product-detail.html">Simple Black Clock</a></h5>
                    <ul class="product_price list-unstyled">
                        <li class="old_price">$16.00</li>
                        <li class="new_price">$13.00</li>
                    </ul>
                </div>
            </div>
        </div>                
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card product_item">
            <div class="body">
                <div class="cp_img">
                    <img src="../assets/images/ecommerce/15.png" alt="Product" class="img-fluid" />
                    <div class="hover">
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="product_details">
                    <h5><a href="ec-product-detail.html">Simple Black Clock</a></h5>
                    <ul class="product_price list-unstyled">
                        <li class="old_price">$12.00</li>
                        <li class="new_price">$11.00</li>
                    </ul>
                </div>
            </div>
        </div>                
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card product_item">
            <div class="body">
                <div class="cp_img">
                    <img src="../assets/images/ecommerce/13.png" alt="Product" class="img-fluid" />
                    <div class="hover">
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="product_details">
                    <h5><a href="ec-product-detail.html">Brone Candle</a></h5>
                    <ul class="product_price list-unstyled">
                        <li class="old_price">$23.00</li>
                        <li class="new_price">$17.00</li>
                    </ul>
                </div>
            </div>
        </div>                
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card product_item">
            <div class="body">
                <div class="cp_img">
                    <img src="../assets/images/ecommerce/4.png" alt="Product" class="img-fluid" />
                    <div class="hover">
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="product_details">
                    <h5><a href="ec-product-detail.html">Simple Black Clock</a></h5>
                    <ul class="product_price list-unstyled">
                        <li class="old_price">$16.00</li>
                        <li class="new_price">$10.00</li>
                    </ul>
                </div>
            </div>
        </div>                
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card product_item">
            <div class="body">
                <div class="cp_img">
                    <img src="../assets/images/ecommerce/5.png" alt="Product" class="img-fluid" />
                    <div class="hover">
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="product_details">
                    <h5><a href="ec-product-detail.html">Brone Lamp Glasses</a></h5>
                    <ul class="product_price list-unstyled">
                        <li class="old_price">$18.00</li>
                        <li class="new_price">$15.00</li>
                    </ul>
                </div>
            </div>
        </div>                
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card product_item">
            <div class="body">
                <div class="cp_img">
                    <img src="../assets/images/ecommerce/14.png" alt="Product" class="img-fluid" />
                    <div class="hover">
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="product_details">
                    <h5><a href="ec-product-detail.html">Unero Small Bag</a></h5>
                    <ul class="product_price list-unstyled">
                        <li class="old_price">$21.00</li>
                        <li class="new_price">$17.00</li>
                    </ul>
                </div>
            </div>
        </div>                
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card product_item">
            <div class="body">
                <div class="cp_img">
                    <img src="../assets/images/ecommerce/7.png" alt="Product" class="img-fluid" />
                    <div class="hover">
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="product_details">
                    <h5><a href="ec-product-detail.html">Unero Round Sunglass</a></h5>
                    <ul class="product_price list-unstyled">
                        <li class="old_price">$16.00</li>
                        <li class="new_price">$10.00</li>
                    </ul>
                </div>
            </div>
        </div>                
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card product_item">
            <div class="body">
                <div class="cp_img">
                    <img src="../assets/images/ecommerce/8.png" alt="Product" class="img-fluid" />
                    <div class="hover">
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="product_details">
                    <h5><a href="ec-product-detail.html">Wood Simple Clock</a></h5>
                    <ul class="product_price list-unstyled">
                        <li class="old_price">$16.00</li>
                        <li class="new_price">$10.00</li>
                    </ul>
                </div>
            </div>
        </div>                
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card product_item">
            <div class="body">
                <div class="cp_img">
                    <img src="../assets/images/ecommerce/9.png" alt="Product" class="img-fluid" />
                    <div class="hover">
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="product_details">
                    <h5><a href="ec-product-detail.html">Wood Long TV Board</a></h5>
                    <ul class="product_price list-unstyled">
                        <li class="old_price">$16.00</li>
                        <li class="new_price">$10.00</li>
                    </ul>
                </div>
            </div>
        </div>                
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card product_item">
            <div class="body">
                <div class="cp_img">
                    <img src="../assets/images/ecommerce/10.png" alt="Product" class="img-fluid" />
                    <div class="hover">
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="product_details">
                    <h5><a href="ec-product-detail.html">Simple Black Clock</a></h5>
                    <ul class="product_price list-unstyled">
                        <li class="old_price">$16.00</li>
                        <li class="new_price">$10.00</li>
                    </ul>
                </div>
            </div>
        </div>                
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card product_item">
            <div class="body">
                <div class="cp_img">
                    <img src="../assets/images/ecommerce/11.png" alt="Product" class="img-fluid" />
                    <div class="hover">
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="product_details">
                    <h5><a href="ec-product-detail.html">Wood Simple Chair V2</a></h5>
                    <ul class="product_price list-unstyled">
                        <li class="old_price">$16.00</li>
                        <li class="new_price">$10.00</li>
                    </ul>
                </div>
            </div>
        </div>                
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card product_item">
            <div class="body">
                <div class="cp_img">
                    <img src="../assets/images/ecommerce/12.png" alt="Product" class="img-fluid" />
                    <div class="hover">
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="product_details">
                    <h5><a href="ec-product-detail.html">Simple Black Clock</a></h5>
                    <ul class="product_price list-unstyled">
                        <li class="old_price">$16.00</li>
                        <li class="new_price">$10.00</li>
                    </ul>
                </div>
            </div>
        </div>                
    </div>
</div>
@stop

@section('page-popup')
<!-- Add New Task -->

@stop
@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/css/ecommerce.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop