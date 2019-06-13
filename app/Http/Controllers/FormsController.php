<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class FormsController extends BaseController
{
    function basic(){
        return view('forms.basic');
    }
    function advanced(){
        return view('forms.advanced');
    }
    function examples(){
        return view('forms.examples');
    }
    function validation(){
        return view('forms.validation');
    }
    function wizard(){
        return view('forms.wizard');
    }
    function editors(){
        return view('forms.editors');
    }
    function formupload(){
        return view('forms.formupload');
    }
    function imgcropper(){
        return view('forms.imgcropper');
    }
    function summernote(){
        return view('forms.summernote');
    }
}