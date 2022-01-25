<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Categoy1= new \App\Models\Categoy();
        $Categoy1->nom='Vetements';
        $Categoy1->is_online =1;
        $Categoy1->save();

        $Categoy2= new \App\Models\Categoy();
        $Categoy2->nom='Chaussures';
        $Categoy2->is_online =1;
        $Categoy2->save();

        $Categoy3= new \App\Models\Categoy();
        $Categoy3->nom='Bijoux';
        $Categoy3->is_online =1;
        $Categoy3->save();

        $Categoy4= new \App\Models\Categoy();
        $Categoy4->nom='Jouets';
        $Categoy4->is_online =1;
        $Categoy4->save();

        $Categoy5= new \App\Models\Categoy();
        $Categoy5->nom='Tissus';
        $Categoy5->is_online =1;
        $Categoy5->save();

        $Categoy6= new \App\Models\Categoy();
        $Categoy6->nom='Electro';
        $Categoy6->is_online =1;
        $Categoy6->save();

        $Categoy7= new \App\Models\Categoy();
        $Categoy7->nom='Divers';
        $Categoy7->is_online =1;
        $Categoy7->save();
    }
}
