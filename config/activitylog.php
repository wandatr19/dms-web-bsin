<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Log Name
    |--------------------------------------------------------------------------
    |
    | Nama log default yang akan digunakan ketika melakukan pencatatan aktivitas.
    |
    */
    'default_log_name' => 'default',

    /*
    |--------------------------------------------------------------------------
    | Models to Log
    |--------------------------------------------------------------------------
    |
    | Daftar model yang akan dicatat aktivitasnya. Anda dapat menambahkan model
    | yang ingin Anda lacak aktivitasnya di sini.
    |
    */
    'model' => [
        // App\Models\User::class,
    ],

    'subject_uses' => [
        User::class,
        Document::class,
    ],


    // ...
];
