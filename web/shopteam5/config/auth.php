<?php

return [

   

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

  
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],

        'customer' => [
            'driver' => 'session',
            'provider' => 'customer',
        ],
        'customer_api' => [
            'driver' => 'token',
            'provider' => 'customer',
        ],
    ],

    

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

         'customer' => [
             'driver' => 'eloquent',
             'model' => App\UserCustomer::class,
         ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'customer' => [
            'provider' => 'customer',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
