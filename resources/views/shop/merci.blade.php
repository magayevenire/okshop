@extends('shop')
@section('content')
<br> <br>
<h1 align="center">Dieureudieuf</h1> <br>
<h2 align="center"> Oumou Khaïry Shop vous remercie.</h2><br>
<p align="center">Votre commande à été enregistré avec succé <br>
    Nous vous recontacterons dans les plus bref délais pour procéder au paiement et à l'expédition de votre commande.
</p>
@guest
 <p align="center">Pour aller plus vite la prochaine fois connectez-vous.</p>
@endguest

<div align="center">
    <img  width="500" src="{{asset('produits/merc.jpg')}}">

 </div>
@endsection
