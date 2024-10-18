<?php

namespace App\http\ViewComposer;
use App\Models\Category;
use Illuminate\View\View;

//pour generer les variable necessair pour la vue auto
class HeaderComposer
{
    public function  compose(View $view)
    {
        // avec le boot  elle va envoyer la var category au magasin et home
        $view->with(   'categories',Category::where('is_online',1)->get());
    }
}
