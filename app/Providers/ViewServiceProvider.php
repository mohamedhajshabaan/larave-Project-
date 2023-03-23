<?php

namespace App\Providers;

use App\Models\cat;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        view()->composer('front.layout.header',function ($view){

            $view->with('cats',cat::select('id','name',)->get());
            $view->with('sett',Setting::select('logo','favicon')->first());

        });
        view()->composer('front.layout.footer',function ($view){
            $view->with('sett',Setting::first());

        });



    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
