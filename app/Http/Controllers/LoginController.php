<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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

        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
    
       
        //dd($credentials);
    
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        session()->flash('error', 'Email pasword wrong');

        return redirect()->back();
        
        //return redirect(route('home'));
    }
}
