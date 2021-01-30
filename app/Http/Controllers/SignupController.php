<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller
{
    //
    public function main(){
        return view('signup');
    }
    public function signup_post(Request $request)
    {
        //dd($request->all());

        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'required|email:rfc,dns|unique:users',
            'password'=> 'required'
        ]);

        //$user = User::create($request->all());
        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password)
        ]);
        
        session()->flash('success', 'Signup Successfull!');
        return redirect(route('login'));
    }
}