<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class EcommerceController extends BaseController
{
    function dashboard(){
        return view('ecommerce.dashboard');
    }
    function product(){
        return view('ecommerce.product');
    }
    function productdetail(){
        return view('ecommerce.productdetail');
    }
    function productlist(){
        return view('ecommerce.productlist');
    }
    function productorder(){
        return view('ecommerce.productorder');
    }
    function productcart(){
        return view('ecommerce.productcart');
    }
    function checkout(){
        return view('ecommerce.checkout');
    }
}
