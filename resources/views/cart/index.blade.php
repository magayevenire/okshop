@extends('shop')
@section('content')
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
                        <img width="110" class="img-thumbnail" src="{{asset('produits/'.$proda->attributes['images'])}}" alt="">
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
                                  <button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500"><a  class="pl-2" href=""><i class="fas fa-sync"></i> </a>
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
                    <button class="px-4 py-2 text-white bg-red-600">x</button>
                </form>

                </td>



                </tr>

                @endforeach
                </tbody>
                <tfoot>

                <tr>
                    <td colspan="2"></td>
                    <td>Total TTC</td>
                    <td>{{number_format(($total_panier),0,',',' ')}} Franc CFA</td>
                </tr>
                </tfoot>
            </table>
            <div>
            <form action="{{ route('cart.clear')}}" method="POST">
                @csrf
                <button class="px-6 py-2 text-red-800 bg-red-300">Remove All Cart</button>
              </form>
            <a class="btn btn-block btn-outline-dark" href="">Commander</a></div>
        </div>
    </section>
</main>

@endsection
