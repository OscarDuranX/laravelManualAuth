<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

//        $this->app->bind(
//            \App\ManualAuth\Guard::class, config('manualauth.guard')
//        );

//        $this->app->bind(
//            \App\ManualAuth\::class, config('manualauth.guard')
//        );


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
