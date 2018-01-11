<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Stevebauman\Inventory\Models\Metric;
use Stevebauman\Inventory\Models\Category;
use Stevebauman\Inventory\Models\Inventory;
use Stevebauman\Inventory\Models\Location;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        \View::composer('*', function($view){

            $view->with('metrics', Metric::all());

        });

        \View::composer('*', function($view){

            $view->with('categories', Category::all());

        });

        
        \View::composer('*', function($view){

            $view->with('locations', Location::all());

        });

        \View::composer('*', function($view){

            $view->with('inventories', Inventory::all());

        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
