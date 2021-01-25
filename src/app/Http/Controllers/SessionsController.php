<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{   
    public function getSignup()
    {
        return view('auth.signup');
    }
    
    public function postSignup(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|unique:users|email|max:255',
            'name' => 'required|unique:users|alpha_dash|max:20',
            'password' => 'required|min:6',
        ]);
        
        User::create([
            'email' => $request ->input('email'),
            'name' => $request ->input('name'),
            'password' => bcrypt($request ->input('password')),
        ]);
        
        return redirect()->route("home");
    }

    public function getSignin()
    {
        return view('auth.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|max:255',
            'password' => 'required|min:6',
        ]);
       
       if(!Auth::attempt($request->only(['email','password']),$request->has('remember') ))
       {
        return redirect()->back();
          
       }

    return redirect()->route('home');
    
    }
    public function getOut(){
        Auth::logout();
        
        return redirect()->route("home");
    }
}
