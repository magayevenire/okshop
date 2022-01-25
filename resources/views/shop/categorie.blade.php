@extends('shop')
@section('content')

<main role="main">


    <div class="py-3">
        <div class="container-fluid">
            <div class="row">
                @foreach ($prods as $produit)

                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('produits/'.$produit->img1)}}" class="">
                            <div class="card-body">
                                <p class="card-text">{{$produit->ref}} <br>{{$produit->descript}} </p>
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
