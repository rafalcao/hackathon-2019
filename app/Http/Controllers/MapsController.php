<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class MapsController extends BaseController
{
    function jvectormap(){
        return view('maps.jvectormap');
    }
    function yandex(){
        return view('maps.yandex');
    }
}
