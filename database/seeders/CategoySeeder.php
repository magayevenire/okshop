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

        $Categoy8= new \App\Models\Categoy();
        $Categoy8->nom='bas';
        $Categoy8->is_online =1;
        $Categoy8->parent_id =1;
        $Categoy8->save();

        $Categoy9= new \App\Models\Categoy();
        $Categoy9->nom='haut';
        $Categoy9->is_online =1;
        $Categoy9->parent_id =1;
        $Categoy9->save();

        $Categoy10= new \App\Models\Categoy();
        $Categoy10->nom='ensemble';
        $Categoy10->is_online =1;
        $Categoy10->parent_id =1;
        $Categoy10->save();

        $Categoy11= new \App\Models\Categoy();
        $Categoy11->nom='robe';
        $Categoy11->is_online =1;
        $Categoy11->parent_id =1;
        $Categoy11->save();

        $Categoy13= new \App\Models\Categoy();
        $Categoy13->nom='Sac';
        $Categoy13->is_online =1;
        $Categoy13->save();

        $Categoy19= new \App\Models\Categoy();
        $Categoy19->nom='Vaisselle';
        $Categoy19->is_online =1;
        $Categoy19->save();

        $Categoy12= new \App\Models\Categoy();
        $Categoy12->nom='Sandale';
        $Categoy12->is_online =1;
        $Categoy12->parent_id =2;
        $Categoy12->save();

        $Categoy14= new \App\Models\Categoy();
        $Categoy14->nom='Talons';
        $Categoy14->is_online =1;
        $Categoy14->parent_id =2;
        $Categoy14->save();

        $Categoy15= new \App\Models\Categoy();
        $Categoy15->nom='Basket';
        $Categoy15->is_online =1;
        $Categoy15->parent_id =2;
        $Categoy15->save();

        $Categoy16= new \App\Models\Categoy();
        $Categoy16->nom='Parrure';
        $Categoy16->is_online =1;
        $Categoy16->parent_id =3;
        $Categoy16->save();

        $Categoy17= new \App\Models\Categoy();
        $Categoy17->nom='Montre';
        $Categoy17->is_online =1;
        $Categoy17->parent_id =3;
        $Categoy17->save();

        $Categoy18= new \App\Models\Categoy();
        $Categoy18->nom="Boucle d'oreille";
        $Categoy18->is_online =1;
        $Categoy18->parent_id =3;
        $Categoy18->save();

        $Categoy20= new \App\Models\Categoy();
        $Categoy20->nom="Collier";
        $Categoy20->is_online =1;
        $Categoy20->parent_id =3;
        $Categoy20->save();

        $Categoy21= new \App\Models\Categoy();
        $Categoy21->nom="Bracelet";
        $Categoy21->is_online =1;
        $Categoy21->parent_id =3;
        $Categoy21->save();

        $Categoy22= new \App\Models\Categoy();
        $Categoy22->nom="Abaya";
        $Categoy22->is_online =1;
        $Categoy22->parent_id =1;
        $Categoy22->save();


    }
}
