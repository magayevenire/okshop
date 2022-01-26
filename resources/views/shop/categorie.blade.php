@extends('shop')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @if ($categ->parent_id!==null)
        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('voir_produit_par_cat',['id'=>$categ->parent->id])}}">{{$categ->parent->nom}}</a></li>
        @endif
        <li class="breadcrumb-item active" aria-current="page">{{$categ->nom}}</li>
        @foreach ($categ->enfant as $child)
            <li class="breadcrumb-item"><a href="{{route('voir_produit_par_cat',['id'=>$child->id])}}">{{$child->nom}}</a></li>
        @endforeach

    </ol>
</nav>
<main role="main">


    <div class="py-3">
        <div class="container-fluid">
            <div class="row">
                @foreach ($prods as $produit)

                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('produits/'.$produit->img1)}}" class="">
                            <div class="card-body">
                                <p class="card-text">{{$produit->ref}} <br>{{$produit->descript}} <br>
                                    <span class="badge badge-secondary"><a class="text-dark"href="{{route('voir_produit_par_cat',['id'=>$produit->categoy->id])}}">{{$produit->categoy->nom}}</a></span>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">{{number_format($produit->prix_ht,0,',',' ')}} Franc CFA</span>
                                    <a href="{{route('voir_produit',['ref'=>$produit->ref])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">


            </div>
        </div>
    </div>

</main>

@endsection
