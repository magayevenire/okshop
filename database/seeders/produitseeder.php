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
       /* $prod = new \App\Models\Produit;
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
        $prod->save();*/

        $prod = new \App\Models\Produit;
        $prod->ref='Abaya brodé_fleuri';
        $prod->prix_ht=30000;
        $prod->qte=15;
        $prod->taille='l';
        $prod->couleur='Mauve';
        $prod->descript= 'Magnifique Abaya avec un perlage multicolore existe en différent coloris';
        $prod->img1='abaya_noir_brodé_fleuri(1).jpg';
        $prod->img2='abaya_noir_brodé_fleuri(2).jpg';
        $prod->categoy_id=18;
        $prod->save();



        $prod = new \App\Models\Produit;
        $prod->ref='Abaya bella_fil';
        $prod->prix_ht=30000;
        $prod->qte=15;
        $prod->taille='l';
        $prod->couleur='noir_bleu';
        $prod->descript= 'Magnifique Abaya avec une jolie décoration au  fil brillant  bleu';
        $prod->img1='Abaya_bella_noir_fil_bleu(1).jpg';
        $prod->img2='Abaya_bella_noir_fil_bleu(2).jpg';
        $prod->categoy_id=18;
        $prod->save();

        $prod = new \App\Models\Produit;
        $prod->ref='Abaya brode_fa';
        $prod->prix_ht=30000;
        $prod->qte=15;
        $prod->taille='xl';
        $prod->couleur='rose';
        $prod->descript= 'Joli Abaya  brodé au  fil noir';
        $prod->img1='Abaya_brode_fa_rose(1).jpg';
        $prod->img2='Abaya_brode_fa_rouge(1).jpg';
        $prod->categoy_id=18;
        $prod->save();

        $prod = new \App\Models\Produit;
        $prod->ref='Abaya brode_fa';
        $prod->prix_ht=30000;
        $prod->qte=1;
        $prod->taille='M';
        $prod->couleur='turkoise';
        $prod->descript= 'joli Abaya  brodé au  fil noir';
        $prod->img1='Abaya_brode_fa_turkoise(1).jpg';
        $prod->img2='Abaya_brode_fa_rose(1).jpg';
        $prod->categoy_id=18;
        $prod->save();

        $prod = new \App\Models\Produit;
        $prod->ref='Abaya brode_fa';
        $prod->prix_ht=30000;
        $prod->qte=1;
        $prod->taille='M';
        $prod->couleur='Rouge';
        $prod->descript= 'joli Abaya  brodé au  fil noir';
        $prod->img1='Abaya_brode_fa_rouge(1).jpg';
        $prod->img2='Abaya_brode_fa_rose(1).jpg';
        $prod->categoy_id=18;
        $prod->save();

        $prod = new \App\Models\Produit;
        $prod->ref='Abaya mina';
        $prod->prix_ht=30000;
        $prod->qte=1;
        $prod->taille='M';
        $prod->couleur='Bleu ciel';
        $prod->descript= 'joli Abaya  à imprimé brillant';
        $prod->img1='Abaya_mina_bleu_clair(1).jpg';
        $prod->img2='Abaya_mina_bleu_clair(2).jpg';
        $prod->categoy_id=18;
        $prod->save();

        $prod = new \App\Models\Produit;
        $prod->ref='Abaya strass_fa';
        $prod->prix_ht=30000;
        $prod->qte=1;
        $prod->taille='M';
        $prod->couleur='Bleu ciel';
        $prod->descript= 'joli Abaya  à motif floral doré';
        $prod->img1='Abaya_strass_fa_bleu_nuit(1).jpg';
        $prod->img2='Abaya_strass_fa_bleu_nuit(2).jpg';
        $prod->categoy_id=18;
        $prod->save();
    }

}
