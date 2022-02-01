<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class tagTabseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     * @return void
     */
    public function run()
    {
        $tag1 =new \App\Models\tag;
        $tag1->nom='#Tarou';
        $tag1->save();

        $tag2 =new \App\Models\tag;
        $tag2->nom='#Lonam';
        $tag2->save();

        $tag3=new \App\Models\tag;
        $tag3->nom='#Djongué';
        $tag3->save();

        $tag4=new \App\Models\tag;
        $tag4->nom='#fekhlou';
        $tag4->save();

        $tag5=new \App\Models\tag;
        $tag5->nom='#Séday';
        $tag5->save();

        $tag6=new \App\Models\tag;
        $tag6->nom='#DiegBouParé';
        $tag6->save();

        $tag7=new \App\Models\tag;
        $tag7->nom='#KeurGouNex';
        $tag7->save();

        $tag8=new \App\Models\tag;
        $tag8->nom='#Ngonal';
        $tag8->save();

        $tag9=new \App\Models\tag;
        $tag9->nom='#SagnséNice';
        $tag9->save();

        $tag10=new \App\Models\tag;
        $tag10->nom='#XolYaGuiFex';
        $tag10->save();

        $tag11=new \App\Models\tag;
        $tag11->nom='#MayChef';
        $tag11->save();
    }
}
