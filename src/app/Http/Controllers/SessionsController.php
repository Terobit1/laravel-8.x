<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function getSignin()
    {
        return view('auth.signin')
    }

    public function postSignin(Request $request)
    {
       dd("ok") 
    }
}
