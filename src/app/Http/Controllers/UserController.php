<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        
       
        if(!auth()->check()||!Auth::user()->Admin == "1"){
            return redirect()->route("home");
        }
        
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        if(!auth()->check()||!Auth::user()->Admin == "1"){
            return redirect()->route("home");
        }
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users|alpha_dash|max:20',
            'email' => 'required|unique:users|email|max:255',
            'provider_id'=> 'required|max:255',
            'Admin'=> 'required|boolean',
            'password' => 'required|min:6',         
            
           
        ]);

        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'provider_id' => $request->get('provider_id'),
            'Admin'=> $request->get('Admin'),
            'password' => $request->get('password'),


        ]);

        $user->save();

        return redirect('/users')->with('success', 'Пост успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if(!auth()->check()||!Auth::user()->Admin == "1"){
            return redirect()->route("home");
        }

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        if(!auth()->check()||!Auth::user()->Admin == "1"){
            return redirect()->route("home");
        }

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|alpha_dash|max:20',
            'email' => 'required|email|max:255',
            'provider_id'=> 'required|max:255',
            'Admin'=> 'required|boolean',
            'password' => 'required|min:6',    
        ]);

        $user = User::find($id);
        $user->name =  $request->get('name');
        $user->email = $request->get('email');
        $user->provider_id = $request->get('provider_id');
        $user->Admin =  $request->get('Admin');
        $user->password = $request->get('password');
        $user->save();

        return redirect('/users')->with('success', 'Пост успешно отредактирован!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users')->with('success', 'Пост удален!');
    }
    
}