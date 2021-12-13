
<?php

return [
    'adminMenu' => [
        //[Name,Slug,Icon,Parent]
        1 => ['name' => 'Dashboard', 'slug' => 'home', 'icon' => 'deshboard', 'child' => array()],
        38 => ['name' => 'Plugin', 'slug' => 'plugin', 'icon' => 'extension-puzzle-outline', 'child' => array()],
        39 => ['name' => 'Tools', 'slug' => 'tools', 'icon' => 'construct-outline', 'child' => array()],
        40 => ['name' => 'Settings', 'slug' => 'settings', 'icon' => 'options-outline', 'child' => array()],

    ],
    'customPost' => [

        'page' => [
            'label' => "Pages",
            'menu_icon' => 'fal fa-newspaper',
            'taxonomies' => [
                'page-category' => ['label' => "Page Categories", 'show_in_menu' => true],
            ],
            'menu_order' => 4,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'editor_permalink_show' => true,
            'editor_show' => true,
            'show_in_dash' => true,
            'in_slug' => true,
        ]
    ],

    'metaBox' => [
        'side' => [
            [
                'title' => 'Publish',
                'callback' => App\helper\MetaBox::publishMetabox(),
                'order' => 2,
                'postType' => 'all' //array or all
            ]
        ],
        'bottom' => [
            [
                'title' => 'gogle',
                'callback' => App\Helper\MetaBox::bottomMetabox(),
                'order' => 1,
                'postType' => 'all' //array or all
            ]
          
        ]

    ]

];
