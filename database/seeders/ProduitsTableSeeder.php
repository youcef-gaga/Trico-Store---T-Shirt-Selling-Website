<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit = new Produit();
        $produit->nom = "T-Shirt Goonies";
        $produit->prix_ht = 45;
        $produit->description = "T-Shirt du film les Goonies";
        $produit->photo_principale = "goonies.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Star Trek";
        $produit->prix_ht = 35;
        $produit->description = "T-Shirt du film les Star Trek";
        $produit->photo_principale = "star_trek_kirk.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt M. happy";
        $produit->prix_ht = 15;
        $produit->description = "T-Shirt du film qui rend heurux";
        $produit->photo_principale = "happy.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "TShirt Hulk";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt  qui rend super fort";
        $produit->photo_principale = "hulk.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Wonder Woman";
        $produit->prix_ht = 19;
        $produit->description = "T-Shirt Wonder Woman";
        $produit->photo_principale = "wonder_woman.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Les Simpsons";
        $produit->prix_ht = 22;
        $produit->description = "T-Shirt Les Simpsons";
        $produit->photo_principale = "simpsons.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Super Man";
        $produit->prix_ht = 13;
        $produit->description = "T-Shirt Super Man";
        $produit->photo_principale = "super_man.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt little miss sunshine";
        $produit->prix_ht = 31;
        $produit->description = "T-Shirt little miss sunshine";
        $produit->photo_principale = "little_miss_sunshine.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt krusty le clown";
        $produit->prix_ht = 27;
        $produit->description = "T-Shirt krusty le clown";
        $produit->photo_principale = "krusty.jpg";
        $produit->save();
    }
}
