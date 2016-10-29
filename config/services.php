<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
	  'github' => [
        'client_id' =>  env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => env('GITHUB_REDIRECT'),
    ],
    'facebook' => [
        'client_id' => '180940502362123',
        'client_secret' => '8194be8f7156760e7939573f3672726d',
        'redirect' => "http://localhost:8000/auth/facebook/callback",
    ],
    'google' => [
        'client_id' =>  '242715416009-6hlli0vup9rh3nc0bsop1pb0ftrf8it9.apps.googleusercontent.com',
        'client_secret' => 'jpfWr-70IRtDvhMiV_qNp074',
        'redirect' => "http://localhost:8000/auth/google/callback",
    ]

];
