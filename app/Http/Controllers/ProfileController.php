<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('pages.profile',[
            'dados' => auth()->user()
        ]);
    }

    public function save(Request $request)
    {
        print_r($request);
        return;
    }
}
