<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema; //Added https://laravel.com/docs/9.x/migrations#indexes
use Illuminate\Support\Facades\URL;
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
        Schema::defaultStringLength(191); //Added https://laravel.com/docs/9.x/migrations#indexes
        URL::forceScheme('http'); 
        
    }
}
