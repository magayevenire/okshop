@extends('shop')
@section('extra-script')
<script src="https://js.stripe.com/v3/"></script>
@endsection
@section('content')

<H1 align="center">Confirmation</H1>

@guest
<h3 align="center"> Merci  de confirmer votre commande </h3> <br>

<p  align="center"> En nous transmettant vos coordonnées enfin de pouvoir mieux traiter votre commande.</p><br>
<div class="d-flex justify-content-center">
    <div align="right">
        <form action="{{route('payment.val',['id_p'=>$payment_intent])}}" id='valcom' method="GET">
            @csrf
            <div >
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div >
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div >
                <label for="tel">Telephone</label>
                <input id="tel" name="tel" required>
            </div>
        </form>
    </div>
</div>
<button form="valcom" type="submit">Envoyer Commande</button>

@endguest

@auth

    <div align="center"> Merci  de confirmer votre commande en cliquant sur le bouton confirmer</div>
    {{ session()->get('error') }}
    <a href="{{route('payment.val',['id_p'=>$payment_intent])}}" class="btn btn-sm btn-outline-secondary">payer</i></a>
@endauth
@endsection
