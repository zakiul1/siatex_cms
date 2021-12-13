<?php

namespace App\Providers;
use \MetaBox;
use Illuminate\Support\ServiceProvider;


class MetaBoxServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('metaBox',function(){
            return new \App\Helper\MetaBox;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        MetaBox::addMetaBox([
            'title'=>'Upper',
            'callback'=> MetaBox::publishMetabox(),
            'order'=>1,
            'postType'=>'all'//array or all
        ],"side");
        MetaBox::addMetaBox([
            'title'=>'Test',
            'callback'=> MetaBox::publishMetabox(),
            'order'=>1,
            'postType'=>'all'//array or all
        ],"side");
    }
}
