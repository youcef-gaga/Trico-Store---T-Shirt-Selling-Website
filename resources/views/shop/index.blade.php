@extends('home')<// herite de la classe home*/>
@section('content')<//foction  notre content est met sur yeild>

    <div class="album py-5 bg-light">
        <div class="container">
            <h1> <u>Nos Tricoo T-shirts :</u> </h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach ($produit as $produit) <//boucle qui mets des img de bd>
                    <div class="col-4">
                        <div class="card shadow-sm">
                            <img class="card-img-top" src="{{ asset('Produit/' . $produit->photo_principale) }}"
                                alt="card image cap">

                            <div class="card-body">
                                <p class="card-text">{{ $produit->nom }}<br>{{ $produit->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">{{ number_format($produit->prix_ht, 2) }}DZD</span>
                                    <a href="{{ route('voir_produit', ['id' => $produit->id]) }}"
                                        class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>

                                </div>


                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>

@endsection
