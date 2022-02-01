@extends('home')
@section('content')

<nav aria-label="breadcrumb">

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Panier</a></li>
        <li class="breadcrumb-item active" aria-current="page">Identification</li>
        <li class="breadcrumb-item"><a href="#">Merci</a></li>
    </ol>
</nav>

<main>
    <div class="py-5 text-center">
      <br> <br>
        <h2>Valider mes achats</h2>
    </div>
    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Votre panier</span>
          <span class="badge bg-primary rounded-pill">{{$nb_art}}</span>
        </h4>
        <ul class="list-group mb-3">

            @foreach ($content as $item)
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">{{$item->name}}</h6>
              <small class="text-muted">couleur: {{$item->attributes['color']}} <br> taille: {{$item->attributes['size']}}</small>
            </div>
            <span class="text-muted">{{number_format(($item->price),0,',',' ')}} Franc CFA</span>
          </li>
        @endforeach

          <li class="list-group-item d-flex justify-content-between">
            <span>Total TTC</span>
            <strong>{{number_format(($total_panier),0,',',' ')}} Franc CFA</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3 text-primary" align="center">Authentification</h4> <br> <br>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
                <label for ="pseudoco"><h5>Nom d'utilisateur</h5></label>
                <input type="text" class="form-control"  placeholder="Entrer le nom d'utilisateur" name="pseudoco" value="<?php if(isset($pseudo)){echo $pseudo;}?>" required >
            </div>

            <div class="col-sm-6">
                <label for="mdpco"><b>Mot de passe</b></label>
                <input type="password" class="form-control"  placeholder="Entrer le mot de passe" name="mdpco" required >
            </div>
            <br> <br>

            <div class="col-12 d-flex justify-content-lg-center ">
                <input   class=" btn btn-lg btn-success" type="submit" name="formco" id='submit' value='LOGIN' > <br>
                <button  class=" btn btn-lg btn-info" id='inscript'><a href="inscription.php" > Inscription</a></button>
            </div>




        </form>
      </div>
    </div>
</main>
@endsection
