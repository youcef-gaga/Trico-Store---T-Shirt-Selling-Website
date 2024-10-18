<?php

namespace App\Http\Controllers\shop;

use App\Models\Produit;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Validator\Validator;
use Illuminate\Support\Facades\Auth;

class maincontroller extends Controller
{
    //Afficher la page d'accueil du shop
    public function index()
    {
        //  equivalent au code sql    select * from produit
        $produit = Produit::all();

        //recuperer tous les catgorie where  is_online =1
        //  $categories = Category::where('is_online', 1)->get();

        return view(
            'shop.index',
            compact('produit')

        );
    }
    public function article(Request $request)
    {
        //       select * from produit where id = ''
        $produit = Produit::find($request->id);

        //$categories = Category::where('is_online', 1)->get();

        return view(
            'shop.produit',
            //passé la valeur  a la vue
            compact('produit')
        );
    }
    public function voircategory()
    {

        //recuperer tous les catgorie where  is_online =1
        //  $categories = Category::where('is_online', 1)->get();
        //dd($category);
        return view(
            '
        shop.category',
            //  compact('categories')

        );
    }
    public function loginpage()
    {
        return view('login');
    }
    public function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            return redirect('main/successlogin');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }
    function successlogin()
    {
        return view('successlogin');
    }

    function logout()
    {
        Auth::logout();
        return redirect('main');
    }

}
