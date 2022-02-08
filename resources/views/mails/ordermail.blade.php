<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouvelle commande</title>
</head>
<body>
<h5>Hey une nouvelle commande pour ta boutique !!</h5><br>
<p>client :{{$nom}}, {{$prenom}}<br>
    Tel: {{$tel}}<br>
    <table class="table table-bordered table-responsive-sm">
        <thead>

            <tr>
                <th>Produit</th>
                <th>Couleur</th>
                <th>Taille</th>
                <th>Qte</th>
                <th>P.U</th>
                <th>Total TTC</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($cart as $car)

        <tr>
            <td>
                <img width="100" class="img-thumbnail" src="{{asset('produits/'.$car->attributes['images'])}}" alt="">
                {{$car->name}}
            </td>
            <td>
               {{$car->attributes['color']}}

            </td>
            <td>

                {{$car->attributes['size']}}

             </td>

                {{number_format($car->price,0,',',' ')}} Franc CFA
            </td>
            <td>
                {{number_format(($car->price * $car->quantity),0,',',' ')}} Franc CFA
            </td>
        </form>
        @endforeach
        </tbody>
        <tfoot>

        <tr>
            <td colspan="4"></td>
            <td>Total TTC</td>
            <td>{{number_format(($total),0,',',' ')}} Franc CFA</td>
        </tr>
        </tfoot>
    </table>
</body>
</html>
