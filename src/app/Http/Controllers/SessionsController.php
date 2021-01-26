<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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

    public function redirectToGoogle(){

        return Socialite::driver('google')->redirect();

    }
    public function handleGoogleCallback(){

        $user = Socialite::driver('google')->user();
        $this->_registerOrLoginUser($user);
        return redirect()->route("home");
    }

    public function redirectToFaceBook(){

        return Socialite::driver('facebook')->redirect();

    }
    public function handleFaceBookCallback(){

        $user = Socialite::driver('facebook')->user();
        $this->_registerOrLoginUser($user);
        return redirect()->route("home");
    }

    protected function _registerOrLoginUser($data){

        $user = User::where('email','=',$data->email)->first();
        if(!$user){
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->save();
        }
        Auth::login($user);
    }

}
