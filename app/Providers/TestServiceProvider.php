<?php

namespace App\Providers;
use App;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        App::bind('someclass', function()
        {
            return new \App\Classes\Someclass;
        });
    }
}
