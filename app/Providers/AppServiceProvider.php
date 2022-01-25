<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  App\Http\ViewComposers\HeaderComposer;

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
        view()->composer( 'shop',HeaderComposer::class);
        view()->composer( 'home',HeaderComposer::class);

    }
}
