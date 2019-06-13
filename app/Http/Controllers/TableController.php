<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class TableController extends BaseController
{
    function basic(){
        return view('table.basic');
    }
    function normal(){
        return view('table.normal');
    }
    function datatable(){
        return view('table.datatable');
    }
    function editable(){
        return view('table.editable');
    }
    function tablecolor(){
        return view('table.tablecolor');
    }
    function filter(){
        return view('table.filter');
    }
    function dragger(){
        return view('table.dragger');
    }
}