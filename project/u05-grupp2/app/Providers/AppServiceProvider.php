<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator; //https://laravel.com/docs/9.x/pagination#using-bootstrap

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
        //https://laravel.com/docs/9.x/pagination#using-bootstrap
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
