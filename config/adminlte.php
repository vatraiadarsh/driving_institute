
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'Driving Institute',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>Driving</b>INSTITUTE',

    'logo_mini' => '<b>D</b>INS.',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'black',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => 'fixed',

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'admin',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [

        [
            'search' => true,
            'text' => 'Search...',
        ],


        [
            'text'        => 'Dashboard',
            'url'          => '/admin',
            'icon'        => 'dashboard',
        ],

        [
            'text' => 'Courses',
            'url'  => 'admin/courses',
            'can'  => 'manage-courses',
        ],
        [
            'text'        => 'Courses',
            'icon'        => 'book',
            'submenu'     =>[
                [
                    'text' => 'All Course',
                    'url'  => 'admin/courses',
                    'icon' => 'tasks',
                    //'label'=> $this->totalCourses,
                    'label-color'=>'danger',
                ],
                [
                    'text' => 'Add Course',
                    'url'  => 'admin/courses/create',
                    'icon' => 'plus-square',
                ],

            ],
        ],

        [
            'text'        => 'Duration',
            'icon'        => 'clock-o',
            'submenu'     =>[
                [
                    'text' => 'All Durations',
                    'url'  => 'admin/duration',
                    'icon' => 'tasks',
                    'label'=> 12    ,
                    'label-color'=>'danger',
                ],
                [
                    'text' => 'Add Duration',
                    'url'  => 'admin/duration/create',
                    'icon' => 'plus-circle',
                ],

            ],
        ],

        [
            'text'        => 'Trainers',
            'icon'        => 'tumblr',
            'submenu'     =>[
                [
                    'text' => 'All Trainers',
                    'url'  => 'admin/trainers',
                    'icon' => 'tasks',
                    'label'=> 12,
                    'label-color'=>'danger',
                ],
                [
                    'text' => 'Add Trainers',
                    'url'  => 'admin/trainers/create',
                    'icon' => 'plus',
                ],

            ],
        ],

        [
            'text'        => 'Enquiry',
            'icon'        => 'bullhorn',
            'submenu'     =>[
                [
                    'text' => 'All Enquiries',
                    'url'  => 'admin/enquiries',
                    'icon' => 'tasks',
                    'label'=> 12,
                    'label-color'=>'danger',
                ],
                [
                    'text' => 'Add Enquiries',
                    'url'  => 'admin/enquiries/create',
                    'icon' => 'plus',
                ],

            ],
        ],


        [
            'text'        => 'booking',
            'icon'        => 'google',
            'submenu'     =>[
                [
                    'text' => 'All Bookings',
                    'url'  => 'admin/bookings',
                    'icon' => 'tasks',
                    'label'=> 7    ,
                    'label-color'=>'danger',
                ],
                [
                    'text' => 'Add Bookings',
                    'url'  => 'admin/bookings/create',
                    'icon' => 'plus',
                ],

            ],
        ],


        [
            'text'        => 'Shift',
            'icon'        => 'exchange',
            'submenu'     =>[
                [
                    'text' => 'All Shifts',
                    'url'  => 'admin/shift',
                    'icon' => 'tasks',
                    'label'=> 7    ,
                    'label-color'=>'danger',
                ],
                [
                    'text' => 'Add Shift',
                    'url'  => 'admin/shift/create',
                    'icon' => 'plus',
                ],

            ],
        ],







        'ACCOUNT SETTINGS',
        [
            'text' => 'Profile',
            'url'  => 'admin/settings',
            'icon' => 'user',
        ],
        [
            'text' => 'Change Password',
            'url'  => 'admin/settings',
            'icon' => 'lock',
        ],
        [
            'text'    => 'Multilevel',
            'icon'    => 'share',
            'submenu' => [
                [
                    'text' => 'Level One',
                    'url'  => '#',
                ],
                [
                    'text'    => 'Level One',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'Level Two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'Level Two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Level Three',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'Level Three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'Level One',
                    'url'  => '#',
                ],
            ],
        ],
        'LABELS',
        [
            'text'       => 'Important',
            'icon_color' => 'red',
        ],
        [
            'text'       => 'Warning',
            'icon_color' => 'yellow',
        ],
        [
            'text'       => 'Information',
            'icon_color' => 'aqua',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
        'pace'       => true,

    ],

    'pace' => [
         'color' => 'red',
        'type' => 'flash',
    ],
];
