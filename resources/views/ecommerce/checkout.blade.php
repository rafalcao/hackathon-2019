@extends('layout.master')
@section('parentPageTitle', 'Ecommerce')
@section('title', 'Checkout')

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
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <div id="wizard_horizontal">
                    <h2>Sign Up</h2>
                    <section>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter User Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                        </div>
                    </section>
                    <h2>Shipping</h2>
                    <section>
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
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-2" placeholder="Address Line 1">
                                    <input type="text" class="form-control" placeholder="Address Line 2">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <select class="form-control show-tick">
                                        <option value="Country">Country</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>                                    
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="State">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Zip Code">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                    </section>
                    <h2>Payment</h2>
                    <section>
                        <div class="row clearfix">
                            <fieldset class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <select class="form-control show-tick">
                                        <option value="Card Type">Card Type:</option>
                                        <option value="Visa">Visa</option>
                                        <option value="MasterCard">MasterCard</option>
                                        <option value="American Express">American Express</option>
                                        <option value="Discover">Discover</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Credit Card Number">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Card CVV">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <label class="pl-2">Expiration:</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <select class="form-control show-tick">
                                                    <option value="Month">Month</option>
                                                    <option>January</option>
                                                    <option>February</option>
                                                    <option>March</option>
                                                    <option>April</option>
                                                    <option>May</option>
                                                    <option>June</option>
                                                    <option>July</option>
                                                    <option>August</option>
                                                    <option>September</option>
                                                    <option>October</option>
                                                    <option>November</option>
                                                    <option>December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <select class="form-control show-tick">
                                                <option value="Year">Year</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                                <option>2020</option>
                                                <option>2021</option>
                                                <option>2022</option>
                                                <option>2023</option>
                                                <option>2024</option>
                                                <option>2025</option>
                                                <option>2026</option>
                                                <option>2027</option>
                                                <option>2028</option>
                                                <option>2029</option>
                                                <option>2030</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <ul class="list-unstyled card-type">
                                        <li><img src="../assets/images/ecommerce/visa-card.png" alt=""></li>
                                        <li><img src="../assets/images/ecommerce/mastercard.png" alt=""></li>
                                        <li><img src="../assets/images/ecommerce/paypal.png" alt=""></li>
                                    </ul>
                                </div>
                            </fieldset>
                        </div>
                    </section>
                    <h2>Review Cart</h2>
                    <section>
                        <div class="product_item_list cart-page">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0 cart-table">
                                    <thead>
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
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3">Subtotal</th>
                                            <th colspan="2">$47.00</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-popup')

@stop
@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/jquery-steps/jquery.steps.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/ecommerce.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/plugins/momentjs/moment.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-steps/jquery.steps.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/basic-form-elements.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/form-wizard.js') }}"></script>
@stop