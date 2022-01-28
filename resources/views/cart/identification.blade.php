@extends('shop')
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
          <span class="badge bg-primary rounded-pill">3</span>
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
        <h4 class="mb-3">Addresse de facturation</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nom</label>
              <input type="text" class="form-control" id="firstName" placeholder="Votre nom" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Prénom</label>
              <input type="text" class="form-control" id="lastName" placeholder="Votre prénom" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Nom d'utilisateur</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Nom d'utilisateur" required>
              <div class="invalid-feedback">
                  Veuillez saisir un nom d'utilisateur correct !
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted"> (Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@mail.com">
              <div class="invalid-feedback"> Veuillez saisir une addresse mail valide ! </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Addresse</label>
              <input type="text" class="form-control" id="address" placeholder="1234 rue shop" required>
              <div class="invalid-feedback"> Veuillez saisir une addresse correct ! </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Complément d'addresse <span class="text-muted"> (Optional)</span></label>
              <input type="text" class="form-control" id="address" placeholder="batiment / entrée / Etage" >

            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Pays</label>
              <select class="form-select" id="country" required>
                <option value="">Choisir</option>
                <option>Sénégal</option>
                <option>France</option>
              </select>
              <div class="invalid-feedback">
                Veuillez Choisir un pays.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Région</label>
              <input type="text" class="form-control" id="state" placeholder="Région" required>
              <div class="invalid-feedback">
                Veuillez renseigner une région.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Ville</label>
              <input type="text" class="form-control" id="zip" placeholder="Ville" required>
              <div class="invalid-feedback">
                Veuillez renseigner une ville.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">L'adresse de livraison est la même que mon adresse de facturation</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Enregistrez ces informations pour la prochaine fois</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Paiement</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Orange money</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Wave</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>



          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Passer Commande</button>
        </form>
      </div>
    </div>
</main>
@endsection
