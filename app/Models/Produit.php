<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoy;
use Symfony\Component\Console\Helper\Table;

class Produit extends Model{
    use HasFactory;
    public function categoy(){
        return $this->belongsTo(Categoy::class);
    }

    public function tags(){
        return $this->belongsToMany(tag::class);
    }

    public function recommandes(){
      return $this->belongsToMany(Produit::class,'produit_produit','produit_recommande_id','produit_id')->orWhere('produit_id',$this->id);
      

    }
}
