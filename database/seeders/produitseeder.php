<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class produitseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prod = new \App\Models\Produit;
        $prod->ref='Abaya Perlé';
        $prod->prix_ht=30000;
        $prod->qte=15;
        $prod->taille='unique';
        $prod->couleur='Bleu Roi';
        $prod->descript= 'Magnifique Abaya avec un perlage multicolore existe en différent coloris';
        $prod->img1='abaya_bleu_roi_perle(1).jpg';
        $prod->img2='abaya_bleu_roi_perle(2).jpg';
        $prod->categ_id=1;
        $prod->save();

        $prod = new \App\Models\Produit;
        $prod->ref='Abaya Perlé_bas';
        $prod->prix_ht=30000;
        $prod->qte=15;
        $prod->taille='xl';
        $prod->couleur='Mauve';
        $prod->descript= 'Magnifique Abaya avec un perlage multicolore existe en différent coloris';
        $prod->img1='abaya_mauve_perlé_bas(1).jpg';
        $prod->img2='abaya_mauve_perlé_bas(2).jpg';
        $prod->categ_id=18;
        $prod->save();

        $prod = new \App\Models\Produit;
        $prod->ref='Abaya brodé_fleuri';
        $prod->prix_ht=30000;
        $prod->qte=15;
        $prod->taille='l';
        $prod->couleur='Mauve';
        $prod->descript= 'Magnifique Abaya avec un perlage multicolore existe en différent coloris';
        $prod->img1='abaya_noir_brodé_fleuri(1).jpg';
        $prod->img2='abaya_noir_brodé_fleuri(2).jpg';
        $prod->categ_id=18;
        $prod->save();
    }
}
