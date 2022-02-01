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
        $matches=['ref'=>$ref,'couleur'=>$color];
        $prod=Produit::where($matches)->get();

            Cart::add([
                'id'=>$prod[0]->id,
                'name' =>$ref,
                'price' => $prod[0]->prix_ht,
                'quantity' =>1,
                'attributes' => array(
                    'images'=>$prod[0]->img1,
                    'color' =>$prod[0]->couleur,
                    'size'=>$size,
                )
            ]);
            session()->flash('success', 'Le produit a été ajouté avec succés !');

            return redirect()->route('cart_index');
        }
        //session()->flash('error', "Le produit avec cette taille ou couleur n'est pas disponible!");




    public function updateCart(Request $req)
    {

        Cart::update(
            $req->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $req->quantity
                ],
            ]
        );
        session()->flash('success', 'Poduit modifié avec succés !');

        return redirect()->route('cart_index');
    }
    public function removeCart(Request $request)
    {
        Cart::remove($request->id);
        session()->flash('success', 'Produit supprimé avec succés !');

        return redirect()->route('cart_index');
    }

    public function clearAllCart()
    {
        Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart_index');
    }

    public function index(){
        $content=Cart::getContent();
        $total_panier=Cart::getTotal();
        return view('cart.index',compact('content','total_panier'));
    }

    public function identification(){
        $content=Cart::getContent();
        $total_panier=Cart::getTotal();
        $nb_art= Cart::getTotalQuantity();
        return view('cart.identification',compact('content','total_panier','nb_art'));
    }
}
