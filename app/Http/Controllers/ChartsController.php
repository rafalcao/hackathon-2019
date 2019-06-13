<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ChartsController extends BaseController
{
    function morris(){
        return view('charts.morris');
    }
    function flot(){
        return view('charts.flot');
    }
    function chartjs(){
        return view('charts.chartjs');
    }
    function sparkline(){
        return view('charts.sparkline');
    }
    function knob(){
        return view('charts.knob');
    }
}