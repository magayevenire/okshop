@extends ('home')
@section('content')



        @foreach($prod as $produit)
            <div class="col-md-4">
                <div class="card box-shadow">
                    <img class="card-img-top img-fluid" src="{{asset('produits/'.$produit->img1)}}" alt="">
                    <div class="card-body">
                        <p class="card-text">{{$produit->ref}} <br> {{$produit->descript}} <br>
                            <span class="badge badge-secondary">
                                <a class="text-dark"href="{{route('voir_produit_par_cat',['id'=>$produit->categoy->id])}}">
                                    {{$produit->categoy->nom}}
                                </a>
                            </span>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{route('voir_produit',['ref'=>$produit->ref])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            </div>
                            <small class="text-muted">{{number_format($produit->prix_ht,0,',',' ')}} Franc CFA</small>
                        </div>
                    </div>
                </div>
            </div>

          
            @endforeach



@endsection
