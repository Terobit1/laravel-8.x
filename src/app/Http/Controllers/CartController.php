<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function Cart()
    {   
        $orderId = session('orderId');
        $orderid1 = Auth::user()->getId();
        dump($orderid1);
        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }
        return view('posts.cart', compact('order'));
       
    }
    public function CartAdd($productId)
    {
        $orderId = session('orderId');
        if(is_null($orderId)){
            $order = Order::create()->id; 
            session(['orderId' => $order->id]);
        }
        else{
            $order = Order::find($orderId);
        }
        $order->products()->attach($productId);
        
        return view('posts.cart',compact('order'));
    }
}
