<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;

class cartcontroller extends Controller
{
    //
    public function add(Request $request){
        Cart::add([
            'id' =>1,
            'name' =>' $request->name',
            'price' => 5665,
            'quantity' =>33,
            'attributes' => array()
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart_ind');
    }
    public function index(){
        $content=Cart::getContent();
        dd($content);
    }
}
