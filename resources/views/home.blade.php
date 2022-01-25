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
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</head>

  <body>

    @include('layout.header')

<main>

  <section class="py-5 text-center ">

      <div class="container">
        <h1 class="jumbotron-heading">Oumou Khaïry Shop</h1>
        <p class="lead text-muted"><h5> Commandez tout ce qui vous fera <br>Plaisir<br>à venir chercher sur place  ou en livraison "tiak-thiak"!</h5></p>
    </div>
  </section>



      @yield('content')



</main>

@include('layout.footer')


    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>


  </body>
</html>
