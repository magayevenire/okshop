<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authcontroller extends Controller
{
    public function connexion(){


        return  view('autent. connexion');
    }
    public function inscription(Request $req){
        $nom=  $req->nom;
        $prenom= $req->prenom;
        $naiss= $req->naiss;
        $addr=$req->addr;
        $pseudo=$req->pseudo;
        $tel=$req->tel;
        $mail=$req->mail;
        $mail2=$req->mail2;
        $mdp=$req->mdp;
        $mdp2=$req->mdp2;
        //dd($nom,$prenom,$naiss,$addr,$pseudo,$mail,$mail2,$mdp,$mdp2);
        if($mail===$mail2){
            if($mdp===$mdp2){
                //dd($nom,$prenom,$naiss,$addr,$pseudo,$mail,$mail2,$mdp,$mdp2);

            }
            else{
                dd("les mots de passe ne sont pas identiques ");
        }

        }
        else{
                dd("les addresses mails ne sont pas identiques ");
        }
        return  view('autent.inscription');
    }
}
