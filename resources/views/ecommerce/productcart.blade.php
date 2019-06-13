@extends('layout.master')
@section('parentPageTitle', 'Ecommerce')
@section('title', 'Cart')

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
    <div class="col-lg-12">
        <div class="card product_item_list cart-page">
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover m-b-0 cart-table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th data-breakpoints="xs">Amount</th>
                                <th data-breakpoints="sm xs md">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="../assets/images/ecommerce/1.png" width="40" alt="Product img"></td>
                                <td><h5>Simple Black Clock</h5></td>
                                <td>
                                    <div class="quantity-grp">
                                        <div class="input-group spinner" data-trigger="spinner">                                    
                                            <span class="input-group-addon">
                                                <a href="javascript:void(0);" class="spin-up" data-spin="up"><i class="zmdi zmdi-plus"></i></a>
                                            </span>
                                            <input type="text" class="form-control text-center" value="1" data-rule="quantity">
                                            <span class="input-group-addon">
                                                <a href="javascript:void(0);" class="spin-down" data-spin="down"><i class="zmdi zmdi-minus"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>$16.00</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="../assets/images/ecommerce/10.png" width="40" alt="Product img"></td>
                                <td><h5>Brone Candle</h5></td>
                                <td>
                                    <div class="quantity-grp">
                                        <div class="input-group spinner" data-trigger="spinner">                                    
                                            <span class="input-group-addon">
                                                <a href="javascript:void(0);" class="spin-up" data-spin="up"><i class="zmdi zmdi-plus"></i></a>
                                            </span>
                                            <input type="text" class="form-control text-center" value="1" data-rule="quantity">
                                            <span class="input-group-addon">
                                                <a href="javascript:void(0);" class="spin-down" data-spin="down"><i class="zmdi zmdi-minus"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>$15.00</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="../assets/images/ecommerce/11.png" width="40" alt="Product img"></td>
                                <td><h5>Wood Simple Clock</h5></td>
                                <td>
                                    <div class="quantity-grp">
                                        <div class="input-group spinner" data-trigger="spinner">                                    
                                            <span class="input-group-addon">
                                                <a href="javascript:void(0);" class="spin-up" data-spin="up"><i class="zmdi zmdi-plus"></i></a>
                                            </span>
                                            <input type="text" class="form-control text-center" value="1" data-rule="quantity">
                                            <span class="input-group-addon">
                                                <a href="javascript:void(0);" class="spin-down" data-spin="down"><i class="zmdi zmdi-minus"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>$16.00</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="../assets/images/ecommerce/5.png" width="40" alt="Product img"></td>
                                <td><h5>Unero Small Bag</h5></td>
                                <td>
                                    <div class="quantity-grp">
                                        <div class="input-group spinner" data-trigger="spinner">                                    
                                            <span class="input-group-addon">
                                                <a href="javascript:void(0);" class="spin-up" data-spin="up"><i class="zmdi zmdi-plus"></i></a>
                                            </span>
                                            <input type="text" class="form-control text-center" value="1" data-rule="quantity">
                                            <span class="input-group-addon">
                                                <a href="javascript:void(0);" class="spin-down" data-spin="down"><i class="zmdi zmdi-minus"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>$23.00</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="../assets/images/ecommerce/6.png" width="40" alt="Product img"></td>
                                <td><h5>Simple Black Clock</h5></td>
                                <td>
                                    <div class="quantity-grp">
                                        <div class="input-group spinner" data-trigger="spinner">                                    
                                            <span class="input-group-addon">
                                                <a href="javascript:void(0);" class="spin-up" data-spin="up"><i class="zmdi zmdi-plus"></i></a>
                                            </span>
                                            <input type="text" class="form-control text-center" value="1" data-rule="quantity">
                                            <span class="input-group-addon">
                                                <a href="javascript:void(0);" class="spin-down" data-spin="down"><i class="zmdi zmdi-minus"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>$16.00</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="../assets/images/ecommerce/2.png" width="40" alt="Product img"></td>
                                <td><h5>Brone Lamp Glasses</h5></td>
                                <td>
                                    <div class="quantity-grp">
                                        <div class="input-group spinner" data-trigger="spinner">                                    
                                            <span class="input-group-addon">
                                                <a href="javascript:void(0);" class="spin-up" data-spin="up"><i class="zmdi zmdi-plus"></i></a>
                                            </span>
                                            <input type="text" class="form-control text-center" value="1" data-rule="quantity">
                                            <span class="input-group-addon">
                                                <a href="javascript:void(0);" class="spin-down" data-spin="down"><i class="zmdi zmdi-minus"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>$12.00</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="../assets/images/ecommerce/3.png" width="40" alt="Product img"></td>
                                <td><h5>Simple Black Clock</h5></td>
                                <td>
                                    <div class="quantity-grp">
                                        <div class="input-group spinner" data-trigger="spinner">                                    
                                            <span class="input-group-addon">
                                                <a href="javascript:void(0);" class="spin-up" data-spin="up"><i class="zmdi zmdi-plus"></i></a>
                                            </span>
                                            <input type="text" class="form-control text-center" value="1" data-rule="quantity">
                                            <span class="input-group-addon">
                                                <a href="javascript:void(0);" class="spin-down" data-spin="down"><i class="zmdi zmdi-minus"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>$22.00</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>        
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="3">Subtotal</th>
                                <th colspan="2">$120.00</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">                            
                <ul class="pagination pagination-primary m-b-0">
                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-popup')

@stop
@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/css/ecommerce.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/plugins/jquery-spinner/js/jquery.spinner.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop