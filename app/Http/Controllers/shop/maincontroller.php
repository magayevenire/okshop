<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categoy;

class maincontroller extends Controller
{
    public function index(){
        $prod=Produit::all();
        //dd($prod);
        return  view('shop.index',compact('prod'));
    }

    public function produit(Request $req){
        $prodi= Produit::where('ref',$req->ref)->get();
        //dd($prodi);
        return view('shop.produit',compact('prodi'));
    }

    public function viewByCategory(Request $req){
       //$prods= Produit::where("categ", $req->id)->get();
        $categ=Categoy::find($req->id);
        dd($categ->produitenf);
        return view('shop.categorie',compact('prods','categ'));
    }
}
