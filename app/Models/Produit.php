<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoy;

class Produit extends Model{
    use HasFactory;
    public function categoy(){
        return $this->belongsTo(Categoy::class);
    }

    public function tags(){
        return $this->belongsToMany(tag::class);
    }

}
