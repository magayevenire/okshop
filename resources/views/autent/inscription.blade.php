@extends('home')
@section('content')
<main>
    <div class="row g-5">

        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3 text-center"  >Inscription</h4>
          <form action="" method="get">
              @csrf

                <div class="row g-3">
                    <div class="col-sm-6">
                        <td align="right"><br><label for="nom">Nom: </label></td>
                        <td><br><input type="text" placeholder="votre nom" id="nom" name="nom" value="<?php if(isset($nom)){echo $nom;}?>"required> <br></td>
                    </div>

                    <div class="col-sm-6">
                        <td align="right"><br><label for="prenom">Prenom: </label></td>
                        <td><br><input type="text" placeholder="votre prenom" id="prenom" name="prenom" value="<?php if(isset($prenom)){echo $prenom;}?>" required> <br></td>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <td align="right"><br><label for="naiss">Date de naissance: </label></td>
                        <td><br><input type="date" placeholder="votre date de naissance" id="naiss" name="naiss" value="<?php if(isset($naiss)){echo $naiss;}?>" required> <br></td>
                    </div>
                    <div class="col-sm-6">
                        <td align="right"><br><label for="addr">Addresse: </label></td>
                        <td><br><input type="text" placeholder="Votre addresse" id="addr" name="addr" value="<?php if(isset($addr)){echo $addr;}?>" required> </td>
                   </div>
                </div>


                <div class="row g-3">
                    <div class="col-sm-6">
                        <td align="right"><br><label for="pseudo">Pseudo: </label></td>
                        <td><br><input type="text" placeholder="votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)){echo $pseudo;}?>" required> </td>
                    </div>
                    <div class="col-sm-6">
                    <td align="right"> <br><label for="tel">Telephone: </label></td>
                    <td><br><input type="number" placeholder="Votre numéro de téléphone" id="tel"name="tel" value="<?php if(isset($tel)){echo $mail2;}?>" required> <br></td>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-sm-6">
                        <td align="right"><br><label for="mail">email: </label></td>
                        <td><br><input type="email" placeholder="votre addresse mail" id="mail" name="mail" value="<?php if(isset($mail)){echo $mail;}?>" required> </td>
                    </div>

                    <div class="col-sm-6">
                        <td align="right"> <br><label for="mail2">Confirmez votre email: </label></td>
                        <td><br><input type="email" placeholder="confirmez votre mail" id="mail2"name="mail2" value="<?php if(isset($mail2)){echo $mail2;}?>" required> <br></td>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-sm-6">
                        <td  align="right"><br><label for="mdp">Mot de passe: </label></td>
                        <td> <br><input type="password" placeholder="mot de passe" id="mdp"name="mdp" required> <br></td>
                    </div>
                    <div class="col-sm-6">
                        <td  align="right"><br><label for="mdp2">Confirmez votre mot de passe: </label></td>
                        <td > <br><input type="password" placeholder="confirmez votre mot de passe" id="mdp2"name="mdp2" required> <br></td>
                    </div>
                </div>


            <br> <br>
            <input type="submit" name="forminscrit" id="envoyer" value="je m'inscris">

        </form>
        </div>
      </div>
  </main>
  @endsection
