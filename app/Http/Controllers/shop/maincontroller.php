<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categoy;
use App\Models\tag;

class maincontroller extends Controller
{
    public function index(){
        $prod=Produit::with('categoy')->orderBy('created_at','DESC')->get();
        //dd($prod);
        return  view('shop.index',compact('prod'));
    }

    public function produit(Request $req){
        $prodi= Produit::where('ref',$req->ref)->get();
        //dd($prodi);
        return view('shop.produit',compact('prodi'));
    }

    public function viewByCategory(Request $req){
        $categ=Categoy::find($req->id);
        $prods=$categ->produits();
        return view('shop.categorie',compact('prods','categ'));
    }

    public function viewByTag(Request $req){
        $tag=tag::find($req->id);
        $prods= $tag->produits;
        return view('shop.categorie',compact('prods','tag'));
    }

    public function search(){
        $q= request()->input('q');
        $prod=Produit::where('ref','like','%'.$q.'%')->orwhere('descript','like','%'.$q.'%')->paginate(6);;
        //dd($q);
        return  view('shop.index',compact('prod'));



    }
}
