<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class AdminSidebarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('adminsidebar',function(){
            return new \App\Helper\AdminSidebar;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    }
}
