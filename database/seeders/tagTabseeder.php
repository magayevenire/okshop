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
        $tag =new \App\Models\tag;
        $tag->nom='#waouw';
        $tag->save();

        $tag2 =new \App\Models\tag;
        $tag2->nom='#cool';
        $tag2->save();

        $tag3=new \App\Models\tag;
        $tag3->nom='#fun';
        $tag3->save();
    }
}
