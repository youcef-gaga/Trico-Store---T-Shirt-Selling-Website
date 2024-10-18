<?php

use Illuminate\Support\Facades\Route;


//route pour le home                   fonction
Route::get('/',"App\Http\Controllers\shop\maincontroller@index")->name('home');
// route pour les produit
Route::get('/product/{id}', "App\Http\Controllers\shop\maincontroller@article")->name('voir_produit');

//route pour les category
Route::get('/category', "App\Http\Controllers\shop\maincontroller@voircategory");

//route pour afficher le panier
Route::get('panier', "App\Http\Controllers\shop\CartController@index")->name('cart_index');
// route pour ajouter un produit au panier
Route::get('panier/add/{id}', "App\Http\Controllers\shop\CartController@add")->name('cart_add');

//Log in & Sign up
Route::view('/login', 'auth\login')->name('login');
Route::view('/signup', 'auth\register')->name('signup');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
