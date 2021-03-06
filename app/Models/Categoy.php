<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoy extends Model
{
    use HasFactory;
    //récuperer l'eventuelle parent d'une categorie
    public function parent(){
        return $this->belongsTo(Categoy::class,'parent_id');
    }
    //récupperer les catégories enfants d'une catégorie
    public function enfant(){
        return $this->hasMany(Categoy::class,'parent_id','id');
    }
    public function produitparent(){
        return $this->hasMany(Produit::class);
    }

    ////récupperer les produits  enfants d'une catégorie enfants au travers d'une catégorie parent
   public function produitenf(){
        return $this->hasManyThrough(Produit::class,Categoy::class,'parent_id','categoy_id');
    }
     public function produits(){
        $produits=$this->produitparent()->with('categoy')->get()->merge($this->produitenf()->with('categoy')->get());
        return $produits;
    }
}
