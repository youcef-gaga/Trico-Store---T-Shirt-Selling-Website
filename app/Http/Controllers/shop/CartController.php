<?php

namespace App\Http\Controllers\Shop;

use App\Models\Produit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CartController extends Controller
{
    //ajouter un produit au panier
    public function add(Request $request)
    {
        //recupere le produit  de bdd grace a la requete
        $produit = Produit::find($request->id);

        \Cart::add(array(
            'id' => $produit->id,
            'name' => $produit->nom,
            'price' => $produit->prix_ht,
            'quantity' => $request->qty,
            'attributes' =>
            array(
                'size' => $request->size,
                'photo' => $produit->photo_principale
            ),

        ));

        //renvois la table cree   au panier
        return redirect(route('cart_index'));
    }
    // methode pour  voir  et afficher le panier
    public function index()
    {


        //recoit le contenue du produit ajouter par la fonction add et le stock  dans la variable  content
        $content = \Cart::getContent();

        // s'assurer de bien recevoir le produit  ajouter
    //dd($content);
        $total_ttc = \Cart::getTotal();
        // dd($total_ttc);
        return view('panier/achat', compact('content', 'total_ttc'));
    }
}
