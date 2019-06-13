<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ProjectsController extends BaseController
{
    function index(){
        return view('projects.index');
    }
}
