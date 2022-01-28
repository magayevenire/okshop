<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
use App\Models\Produit;

class cartcontroller extends Controller
{
    //
    public function add(Request $req){
        $ref=$req->ref;
        $color=$req->color;
        $size=$req->size;
        $matches=['ref'=>$ref,'couleur'=>$color,'taille'=>$size];
        $prod=Produit::where($matches)->get();
        //dd($prod[0]);
        if ($prod[0]!==null){
            Cart::add([
                'id' =>$prod[0]->id,
                'name' =>$prod[0]->ref,
                'price' => $prod[0]->prix_ht,
                'quantity' =>1,
                'attributes' => array(
                    'images'=>$prod[0]->img1,
                    'color' =>$prod[0]->couleur,
                    'size'=>$prod[0]->taille,
                )
            ]);
            session()->flash('success', 'Le produit a été ajouté avec succés !');

            return redirect()->route('cart_index');
        }
        session()->flash('success', 'Le produit avec cette taille ou couleur !');

    }
    public function index(){
        $content=Cart::getContent();
        dd($content);
    }
}
