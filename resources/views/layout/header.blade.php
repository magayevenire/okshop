
<header>

    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container">
            <a href="{{route('homepage')}}" class="navbar-brand d-flex align-items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                <strong href=""> Oumou khaïry Shop </strong>
            </a>
            @include('layout.search')
            @guest
                <button class="woni navbar-toggler btn-outline-light" type="button" >
                <a href="{{ route('login') }}" class="txt-light"> Connexion </a>
            </button>
            @endguest

            @auth

            <button class="woni navbar-toggler btn-outline-light" type="button" >
                <a href="{{ route('deconnexion') }}" class="txt-light"> Deconnexion </a>
            </button>
            @endauth

            <style>
                .woni a {
                    color: White;
                    text-decoration: none;
                    }
            </style>

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart_index') }}"><i class="fa fa-shopping-cart"></i> Panier</a>
                </li>
            </ul>
            </div>
        </div>


<nav class="navbar navbar-expand-lg navbar-light bg-red">
    @auth
    <p class="text-light">Bonjour {{ Auth::user()->lastname }}</p>
        @endauth
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            @foreach ( $categor as $categ)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('voir_produit_par_cat',['id'=>$categ->id])}}"> {{$categ->nom}} </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
</header>
