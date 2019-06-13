<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ChartController extends BaseController
{
    function c3(){
        return view('chart.c3');
    }
    function chartjs(){
        return view('chart.chartjs');
    }
    function morris(){
        return view('chart.morris');
    }
    function flot(){
        return view('chart.flot');
    }
    function sparkline(){
        return view('chart.sparkline');
    }
    function knob(){
        return view('chart.knob');
    }
    function peity(){
        return view('chart.peity');
    }
    function gauges(){
        return view('chart.gauges');
    }
}