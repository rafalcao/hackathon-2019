<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Auth;
use Session;

class AuthenticationController extends BaseController
{
    public function login(){
        return view('authentication.login');
    }
    
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }

    public function register(){
        return view('authentication.register');
    }    
    
    public function forgotPassword(){
        return view('authentication.forgot-password');
    }
    
    public function page404(){
        return view('authentication.page404');
    }
    
    public function page403(){
        return view('authentication.page403');
    }
    
    public function page500(){
        return view('authentication.page500');
    }
    
    public function page503(){
        return view('authentication.page503');
    }
    
    public function offline(){
        return view('authentication.offline');
    }
    
    public function lockscreen(){
        return view('authentication.lockscreen');
    }
}
