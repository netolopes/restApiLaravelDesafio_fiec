<?php

namespace App\Providers;
//adicionado item
//use Illuminate\Support\facades\Schema;
use Illuminate\Support\ServiceProvider;

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
      
      //adicionado item
    //    Schema::defaultStringLength(191);
    }
}
