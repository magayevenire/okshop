<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/images.jfif')}}">

    <title>Oumou Khaïry Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/tshirt.css')}}" rel="stylesheet">

</head>

  <body>


<header>

    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container">
            <a href="{{route('homepage')}}" class="navbar-brand d-flex align-items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                <strong href=""> Oumou khaïry Shop </strong>
            </a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Vous désirez ..." aria-label="Search">
                <button class="btn btn-outline-light" type="submit"><i class='fa fa-search'></i> </button>
            </form>
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

    </header>

    <main>


    </main>

@include('layout.footer')


    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <script defer src="{{asset('js/all.js')}}" ></script>
  </body>
</html>
