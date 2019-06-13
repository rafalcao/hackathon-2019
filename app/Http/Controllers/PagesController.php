<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PagesController extends BaseController
{
    function blank(){
        return view('pages.blank');
    }
    function teamsboard(){
        return view('pages.teamsboard');
    }
    function projects(){
        return view('pages.projects');
    }
    function gallery(){
        return view('pages.gallery');
    }
    function profile(){
        return view('pages.profile');
    }
    function timeline(){
        return view('pages.timeline');
    }
    function htimeline(){
        return view('pages.htimeline');
    }
    function pricing(){
        return view('pages.pricing');
    }
    function invoices(){
        return view('pages.invoices');
    }
    function faqs(){
        return view('pages.faqs');
    }
    function search(){
        return view('pages.search');
    }
    function helper(){
        return view('pages.helper');
    }
}