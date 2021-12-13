<?php

namespace App\Providers;
use \Utility;

use Illuminate\Support\ServiceProvider;


class UtilityServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('utility',function(){
            return new \App\Helper\Utility;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      
        Utility:: addCustomPost([
                'label' => "Siatex",
                'menu_icon' => 'fal fa-newspaper',
                'taxonomies' => [
                    'post-category' => ['label' => "Post Categories", 'show_in_menu' => true],
                    'tag' => ['label' => "Tags", 'show_in_menu' => false]
                ],
                'menu_order' => 4,
                'show_in_menu' => true,
                'show_in_nav_menus' => true,
                'editor_permalink_show' => true,
                'editor_show' => true,
                'show_in_dash' => true,
                'in_slug' => true,
            ],'Siatex');
    }
}
