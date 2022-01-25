<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoy extends Model
{
    use HasFactory;
    //récuperer l'eventuelle parent d'une category
    public function parent(){
        return $this->belongsTo(Categoy::class,'parent_id');
    }
    public function enfant(){
        return $this->hasMany(Categoy::class,'parent_id');
    }

}
