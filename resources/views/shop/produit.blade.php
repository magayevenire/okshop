@extends('shop')
@section('content')

<main role="main">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-secondary">
            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('homepage')}}" class="navbar-brand d-flex align-items-center ">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('voir_produit_par_cat',['id'=>$prodi[0]->categoy->parent->id])}}">{{$prodi[0]->categoy->parent->nom}}</a></li>
            <li class="breadcrumb-item active " aria-current="page"><a href="{{route('voir_produit_par_cat',['id'=>$prodi[0]->categoy->id])}}">{{$prodi[0]->categoy->nom}}</a></li>
        </ol>
    </nav>

    <div class="container">


        <div class="row justify-content-between">

            <div class="col-6">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{asset('produits/'.$prodi[0]->img1)}}" alt="Card image cap">
                </div>
            </div>

            <div class="col-6">
                <h1 class="jumbotron-heading">{{$prodi[0]->ref}}</h1>

                @foreach ($prodi[0]->tags as $tag)
                <span class="badge badge-secondary"><a class="text-dark"href="{{route('voir_produit_par_tag',['id'=>$tag->id])}}">{{$tag->nom}}</a></span>

                @endforeach

                <p class="lead text-muted">{{$prodi[0]->descript}}</p>
                <hr>
                <label for="size">Choisissez votre Couleur</label>
                <select name="size" id="size" class="form-control">
                    @foreach($prodi as $produit)
                    <option value="xs">{{$produit->couleur}}</option>

                </select>

                <hr>
                <label for="size">Choisissez votre taille</label>
                <select name="size" id="size" class="form-control">

                    <option value="xs">{{$produit->taille}}</option>
                    @endforeach
                </select>
                <p>
                    <h5>{{number_format($prodi[0]->prix_ht,0,',',' ')}} Franc CFA</h5>
                    <a href="#" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                </p>

            </div>
        </div>
    </div>


<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <h3>Vous aimerez aussi :</h3>
        </div>
        <div class="row">
            {{$prodi[0]->recommandes}}
            @foreach ($prodi[0]->recommandes as $rec)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img src="{{asset('produits/'.$rec->img1)}}" class="card-img-top img-fluid" alt="Responsive image">

                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <div class="btn-group">
                                    <a href="{{route('voir_produit',['ref'=>$rec->ref])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</div>

</main>

@endsection
