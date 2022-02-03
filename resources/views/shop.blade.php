
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{asset('img/images.jfif')}}">

        @yield('extra-script')
        <title>Oumou Khaïry Shop</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{asset('css/tshirt.css')}}" rel="stylesheet">
        <script defer src="{{asset('js/all.js')}}" ></script>
      <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


  </head>
  <body>

    @include('layout.header')


<main>


  @yield('content')


</main>
@yield('extra-js')

@include('layout.footer')

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>
