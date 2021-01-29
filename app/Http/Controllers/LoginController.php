<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function main(){
        return view('login');
    }
    public function login_post(Request $request)
    {
        //dd($request->all());

        $this->validate($request,[
            'email'=> 'required|email:rfc,dns',
            'password'=> 'required'
        ]);
        return redirect(route('home'));
    }
}
