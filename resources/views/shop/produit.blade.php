@extends('magasin')
@section('content')

    <main role="main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{ asset('Produit/' . $produit->photo_principale) }}"
                            alt="Card image cap">

                    </div>
                </div>
                <div class="col-6">

                    <h1 class="jumbotron-heading">{{ $produit->nom }}</h1>
                    <h5>{{ number_format($produit->prix_ht, 2) }}€</h5>
                    <p class="lead text-muted">{{ $produit->description }}</p>
                    <hr>

                    <form action="{{ route('cart_add', ['id' => $produit->id]) }}" method="GET" id="panier_add">

                        <label for="size">Choisissez votre taille</label>
                        <select name="size" id="size" class="form-control">
                            <option value="xs">XS</option>
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                            <option value="xl">XL</option>
                            <option value="xxl">XXL</option>
                        </select>
                        <label for="qty">Quantité</label>
                        <input class="form-control" name="qty" id="qty" type="number" value="1">
                    </form>

                    
                    <button type="submit" form="panier_add" class="btn btn-cart my-2 btn-block"> <i
                            class="fas fa-shopping-cart"></i> Ajouter au
                        Panier</button>



                </div>
            </div>
        </div>




    </main>

@endsection
