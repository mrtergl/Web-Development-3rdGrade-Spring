<?php

namespace App\Providers;



use View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     * 
     * 
     */
    public function __construct()
    {
        //$this->number = $number;
    }
    
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
        //view()->composer('inc.sidebar', function ($view) use ($number) {
           // $view->with('numara', $number); 
        //});
    }
}
