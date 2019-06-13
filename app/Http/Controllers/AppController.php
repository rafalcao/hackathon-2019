<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AppController extends BaseController
{
    function inbox(){
        return view('app.inbox');
    }
    function compose(){
        return view('app.compose');
    }
    function details(){
        return view('app.details');
    }
    function chat(){
        return view('app.chat');
    }
    function events(){
        return view('app.events');
    }
    function filemanager(){
        return view('app.filemanager');
    }
    function contact(){
        return view('app.contact');
    }
    function blogdashboard(){
        return view('app.blogdashboard');
    }
    function blogpost(){
        return view('app.blogpost');
    }
    function bloglist(){
        return view('app.bloglist');
    }
    function bloggrid(){
        return view('app.bloggrid');
    }
    function blogdetails(){
        return view('app.blogdetails');
    }
    function ticket(){
        return view('app.ticket');
    }
    function taskboard(){
        return view('app.taskboard');
    }
}
