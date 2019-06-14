<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        $users = \App\Users::find(auth()->user()->id);
        return view('pages.profile',[
            'dados' => $users
        ]);
    }

    public function save(Request $request)
    {
        $users = \App\Users::find(auth()->user()->id);

        foreach ($request->all() as $key=>$value) {
            if ($key == '_token') {
                continue;
            }
            $users->$key = $value;
        }
        $users->save();

        return $this->edit();
    }
}
