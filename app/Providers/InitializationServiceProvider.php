<?php

namespace App\Providers;
use \Initialization;

use Illuminate\Support\ServiceProvider;


class InitializationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('initialization',function(){
            return new \App\Helper\Initialization;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Initialization::init();
    }
}
