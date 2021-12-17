<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',

    ],

    'admin'=>[
        'driver'=>'eloquent',
        'model'=> App\Models\admin\Admin::class,
    ],

    'parking'=>[
        'driver'=>'eloquent',
        'model'=> App\Models\packing\ParkingManager::class,
    ],



    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'admin' =>[
            'driver'=>'session',
            'provider'=>'admins'
        ],
        'parking' =>[
            'driver'=>'session',
            'provider'=>'parkings'
        ]
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' =>App\Models\User\Driver::class,
        ],

        'admins'=>[
            'driver'=>'eloquent',
            'model'=>App\Models\admin\Admin::class
        ],

        'parkings'=>[
            'driver'=>'eloquent',
            'model'=> App\Models\packing\ParkingManager::class,
        ],
    ],


    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'admins'=>[
            'driver'=>'eloquent',
            'model'=>App\Models\admin\Admin::class
        ],

        'parkings'=>[
            'driver'=>'eloquent',
            'model'=> App\Models\packing\ParkingManager::class,
        ],
    ],


    'password_timeout' => 10800,

];
