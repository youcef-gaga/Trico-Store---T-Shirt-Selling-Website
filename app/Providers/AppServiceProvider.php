<?php

namespace App\Providers;

use App\http\ViewComposer\HeaderComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //fonction boot demmare   le magasin et home avec HeaderComposer pour lui passé une variable
        view()->composer(['magasin', 'home'],HeaderComposer::class);

        Schema::defaultstringLength(191);
    }
}
