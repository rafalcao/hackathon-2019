<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class UiController extends BaseController
{
    function kit(){
        return view('ui.kit');
    }
    function alerts(){
        return view('ui.alerts');
    }
    function collapse(){
        return view('ui.collapse');
    }
    function colors(){
        return view('ui.colors');
    }
    function dialogs(){
        return view('ui.dialogs');
    }
    function icons(){
        return view('ui.icons');
    }
    function listgroup(){
        return view('ui.listgroup');
    }
    function mediaobject(){
        return view('ui.mediaobject');
    }
    function modals(){
        return view('ui.modals');
    }
    function notifications(){
        return view('ui.notifications');
    }
    function progressbars(){
        return view('ui.progressbars');
    }
    function rangesliders(){
        return view('ui.rangesliders');
    }
    function sortablenestable(){
        return view('ui.sortablenestable');
    }
    function tabs(){
        return view('ui.tabs');
    }
    function waves(){
        return view('ui.waves');
    }
}