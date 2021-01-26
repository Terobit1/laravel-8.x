<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
       
        return view('home',['data' => Product::all()]);
       
    }
    

    public function book1971_1980()
    {
        
        $product = new Product;
        
        return view('home',['data' => $product -> where('category_id','<=','1980') -> where('category_id','>=','1971')->get()]);
    }
    public function book1981_1990()
    {
        
        $product = new Product;
        
        return view('home',['data' => $product -> where('category_id','<=','1990') -> where('category_id','>=','1981')->get()]);
    }
    public function book1991_2000()
    {
        
        $product = new Product;
        
        return view('home',['data' => $product -> where('category_id','<=','2000') -> where('category_id','>=','1991')->get()]);
    }
    public function book2001_2010()
    {
        
        $product = new Product;
        
        return view('home',['data' => $product -> where('category_id','<=','2010') -> where('category_id','>=','2001')->get()]);
    }
}
