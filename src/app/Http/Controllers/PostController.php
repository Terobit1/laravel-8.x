<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Product::all();
        
       
        if(!auth()->check()||!Auth::user()->Admin == "1"){
            return redirect()->route("home");
        }
        
        return view('posts.index', compact('posts'));
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
        return view('posts.create');
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
            'category_id'=> 'required|integer',
            'title'=> 'required|max:255',
            'price'=> 'required|integer',
            'in_stock'=> 'required|boolean',
            'description'=> 'required|max:255',
            'image' => 'required|max:255'
        ]);

        $post = new Product([
            'category_id' => $request->get('category_id'),
            'title' => $request->get('title'),
            'price' => $request->get('price'),
            'in_stock'=> $request->get('in_stock'),
            'description' => $request->get('description'),
            'image' => $request->get('image'),

        ]);

        $post->save();

        return redirect('/posts')->with('success', 'Пост успішно добавлений!');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Product  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Product::find($id);
        if(!auth()->check()||!Auth::user()->Admin == "1"){
            return redirect()->route("home");
        }

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Product  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Product::find($id);
        if(!auth()->check()||!Auth::user()->Admin == "1"){
            return redirect()->route("home");
        }

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Product  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id'=> 'required|integer',
            'title'=> 'required|max:255',
            'price'=> 'required|integer',
            'in_stock'=> 'required|boolean',
            'description'=> 'required|max:255',
            'image' => 'required|max:255'
        ]);

        $post = Product::find($id);
        $post->category_id =  $request->get('category_id');
        $post->title = $request->get('title');
        $post->price = $request->get('price');
        $post->in_stock =  $request->get('in_stock');
        $post->description = $request->get('description');
        $post->image =  $request->get('image');
        $post->save();

        return redirect('/posts')->with('success', 'Пост успісшо відредагований!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Product  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Product::find($id);
        $post->delete();

        return redirect('/posts')->with('success', 'Пост видалений!');
    }
    
}