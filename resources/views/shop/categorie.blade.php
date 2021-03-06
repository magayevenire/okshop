@extends('shop')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-secondary">
        @if (isset($categ))

        @if ($categ->parent_id!==null)
        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('voir_produit_par_cat',['id'=>$categ->parent->id])}}">{{$categ->parent->nom}}</a></li>
        @endif
        <li class="breadcrumb-item active" aria-current="page">{{$categ->nom}}</li>
        @foreach ($categ->enfant as $child)
            <li class="breadcrumb-item"><a href="{{route('voir_produit_par_cat',['id'=>$child->id])}}">{{$child->nom}}</a></li>
        @endforeach

        @else
        <li class="breadcrumb-item active " aria-current="page">{{$tag->nom}}</li>
        @endif
    </ol>
</nav>
<main role="main">


    <div class="py-3">
        <div class="container-fluid">
            <div class="row">
                @foreach ($prods as $produit)

                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img  width= "100px" height="300px" src="{{asset("storage/".$produit->img1)}} " class="card-img-top">
                            <div class="card-body">
                                <div class="card-text"><h6 class="d-flex justify-content-between align-items-center">{{$produit->ref}}  <span class="badge bg-secondary">
                                    <a class="text-dark"href="{{route('voir_produit_par_cat',['id'=>$produit->categoy->id])}}">
                                        {{$produit->categoy->nom}}
                                    </a>
                                </span></h6>
                                </div>
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
