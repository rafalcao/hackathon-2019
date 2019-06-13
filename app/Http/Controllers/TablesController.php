<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class TablesController extends BaseController
{
    function normal(){
        return view('tables.normal');
    }
    function jquerydatatable(){
        return view('tables.jquerydatatable');
    }
    function editable(){
        return view('tables.editable');
    }
    function color(){
        return view('tables.color');
    }
    function filter(){
        return view('tables.filter');
    }
}