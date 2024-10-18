@extends('magasin')
@section('content')


    <main role="main">

        <section class="py-5">
            <div class="container">
                <h1 class="jumbotron-heading"> <span class="badge badge-primary ">Votre panier </span></h1>
                <table class="table table-bordered table-responsive-sm">
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Qte</th>
                            <th>P.U</th>
                            <th>Total TTC</th>
                        </tr>
                    </thead>
                    <tbody>


                        
                        @foreach ($content as $produit)


                            <tr>
                                <td>
                                    <img width="110" class="rounded-circle img-thumbnail" src="{{ asset('Produit/'.$produit->attributes['photo']) }}" alt="">
                                    {{ $produit->name }}<p>Taille:{{ strtoupper($produit->attributes['size']) }}</p>
                                </td>
                                <td>

                                    <input style="display: inline-block" id="qte" class="form-control col-sm-4" type="number"
                                        value="{{ $produit->quantity }}">


                                    <a class="pl-2" href=""><i class="fas fa-sync"></i> </a>
                                </td>
                                <td>
                                    {{ number_format($produit->price,2) }}€
                                </td>
                                <td>
                                    {{ $produit->price * $produit->quantity }} €
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>

                        <tr>
                            <td colspan="2"></td>
                            <td>Total TTC</td>
                            <td>{{ number_format($total_ttc,2) }} €</td>
                        </tr>
                    </tfoot>
                </table>
                <a class="btn btn-block btn-outline-dark" href="identification.html">Commander</a>
            </div>
        </section>
    </main>
@endsection
