<?php return array(

    // The title of the application. It can be a translation key.
    'brand' => "IACT IEEE",

    // The link to the main page
    'brand_url' => '/',

    // The name of the view that is used to render the dashboard.
    // You can specify an entity id prefixing it with `@` like so: `@users`.
    'dashboard' => 'cruddy::MyDashboard',

    // The URI that is prefixed to all routes of Cruddy.
    'uri' => 'admin/backend',

    // The class name of permissions driver.
    'permissions' => 'Kalnoy\Cruddy\Service\PermitsEverything',

    // The middleware that wraps every request to Cruddy. Can be used for authentication.
    'middleware' => ['web','backend'],

    // Main menu items.
    //
    // How to define menu items: https://github.com/lazychaser/cruddy/wiki/Menu
    'menu' => [
        'Users' =>
            [
                'entity' => 'users',
                'icon' => 'user'
            ],

        'Posts' =>
            [
                'entity' => 'posts',
                'icon' => 'list-alt'
            ],
        'Pages' =>
            [
                'entity' => 'pages',
                'icon' => 'modal-window'
            ],
        'Categories' =>
            [
                'entity' => 'categories',
                'icon' => 'check'
            ],
        'Comments' =>
            [
                'items' => [
                            'Post Comments' => ['entity' => 'postComments'],
                            'Page Comments' => ['entity' => 'pageComments']
                            ],
                'icon' => 'comment'
            ],
        'Messages' =>
            [
                'entity' => 'messages',
                'icon' => 'envelope'
            ],
        'Tags' =>
            [
                'entity' => 'tags',
                'icon' => 'tags'
            ],
        'Did you know' =>
            [
                'entity' => 'didyouknow',
                'icon' => 'info-sign'
            ]
    ],

    // The menu that is displayed to the right of the main menu.
    'service_menu' => [
        [
            'url' => 'auth/logout',
            'label' => "Logout",
            'icon' => 'log-out',
        ],

    ],

    // The list of key value pairs where key is the entity id and value is
    // an entity class name. For example:
    //
    // 'users' => 'App\Entities\User'
    //
    // Class is resolved out of IoC container.
    'entities' => [
        'users' => 'App\Entities\UserSchema',
        'posts' => 'App\Entities\PostSchema',
        'categories' => 'App\Entities\CategorySchema',
        'postComments' => 'App\Entities\PostCommentsSchema',
        'pageComments' => 'App\Entities\PageCommentsSchema',
        'pages' => 'App\Entities\PageSchema',
        'tags' => 'App\Entities\TagSchema',
        'messages' => 'App\Entities\MessageSchema',
        'didyouknow' => 'App\Entities\DidYouKnowSchema',
    ],
);