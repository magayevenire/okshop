@extends ('home')
@section('content')



        @foreach($prod as $produit)
            <div class="col-md-4">
                <div class="card box-shadow">
                    <img w class="card-img-top"  width= "100px" height="300px" src='{{asset("storage/".$produit->img1)}}' alt="ty">
                  
                    <div class="card-body">
                        <div class="card-text">
                            <h6 class="d-flex justify-content-between align-items-center">{{$produit->ref}}  <span class="badge bg-secondary">
                                <a class="text-dark"href="{{route('voir_produit_par_cat',['id'=>$produit->categoy->id])}}">
                                    {{$produit->categoy->nom}}
                                </a>
                            </span></h6> {{substr($produit->descript,0,25)}}...

                        </div>
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
