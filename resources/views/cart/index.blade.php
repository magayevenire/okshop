@extends('shop')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Panier</li>
        <li class="breadcrumb-item "><a href="#">Identification</a></li>
        <li class="breadcrumb-item "><a href="#">Merci</a></li>
    </ol>
</nav>

<main role="main">
    <section class="py-5">
        <div class="container">
                <h1 class="jumbotron-heading"> <span class="badge badge-primary ">Votre panier </span></h1>
            <table class="table table-bordered table-responsive-sm">
                <thead>

                    <tr>
                        <th>Produit</th>
                        <th>Couleur</th>
                        <th>Taille</th>
                        <th>Qte</th>
                        <th>P.U</th>
                        <th>Total TTC</th>
                        <th>Supprimer Produit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($content as $proda)

                <tr>
                    <td>
                        <img width="100" class="img-thumbnail" src="{{asset('produits/'.$proda->attributes['images'])}}" alt="">
                        {{$proda->name}}
                    </td>
                    <td>

                       {{$proda->attributes['color']}}

                    </td>
                    <td>

                        {{$proda->attributes['size']}}

                     </td>
                    <td>
                                <form action="{{ route('cart.update') }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $proda->id}}" >
                                  <input type="number" name="quantity" value="{{ $proda->quantity }}"
                                  class="w-6 text-center bg-gray-300" />
                                  <button type="submit" class="btn btn-block btn-outline-primary"><a  class="pl-2" href=""><i class="fas fa-sync"></i> </a>
                                  </td></button>
                                  </form>


                    <td>
                        {{number_format($proda->price,0,',',' ')}} Franc CFA
                    </td>
                    <td>
                        {{number_format(($proda->price *$proda->quantity),0,',',' ')}} Franc CFA
                    </td>

                </td>
                <td class="hidden text-right md:table-cell">
                  <form action="{{ route('cart.remove') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $proda->id }}" name="id">
                    <button class="btn btn-block btn-outline-danger"><h5>x</h5></button>
                </form>

                </td>



                </tr>

                @endforeach
                </tbody>
                <tfoot>

                <tr>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td>Total TTC</td>
                    <td>{{number_format(($total_panier),0,',',' ')}} Franc CFA</td>
                    <td>
                        <form action="{{ route('cart.clear')}}" method="POST">
                            @csrf
                            <button class="btn btn-block btn-outline-danger"><h5>Vider le panier</h5> </button>
                          </form>
                    </td>
                </tr>
                </tfoot>
            </table>
            <div class="d-flex justify-content-between align-items-center">

            <a class="btn btn-block btn-outline-dark" href="{{ route('identification')}}"> <h5>Commander</h5></a></div>
        </div>
    </section>
</main>

@endsection
