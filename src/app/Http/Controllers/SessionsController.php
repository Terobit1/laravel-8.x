<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SessionsController extends Controller
{   
    public function getSignup()
    {
        return view('auth.signin');
    }
    
    public function postSignup()
    {
        // $this->validate($request,[
        //     'email' => 'required|unique:users|email|max:255'
        //     'name' => 'required|unique:users|alpha_dash|max:20'
        //     'password' => 'required|min:6'
        // ]);
        
        // User::create([
        //     'email' => $request ->input('email'),
        //     'name' => $request ->input('username'),
        //     'password' => bcrypt($request ->input('password')),
        // ])
        
        // return redirect()
        //         ->route("home")
        //         ->route("info","Ви успішно зарегіструвались")
    }

    public function getSignin()
    {
        return view('auth.signin');
    }

    public function postSignin(Request $request)
    {
       dd("ok");
    }
}
