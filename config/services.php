<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'linkedin' => [
        'client_id' => '810t945qjljb6d',
        'client_secret' => 'bYQ4VT5QzrgXzgxh',
        'redirect' => 'http://localhost:8000'
    ],
    'facebook' => [
        'client_id' => '1511624745643373',
        'client_secret' => '446e25217d701284b178483c2619e267',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    'google' => [
            'client_id' => '694594720516-36podobbpi3tes1egce6skoaqbhc51pi.apps.googleusercontent.com',
            'client_secret' => '85JIV9jNdd9028TrBtx0z2QH',
            'redirect' => 'http://localhost:8000/google'
        ],

   'github' => [
        'client_id' => 'Iv1.64ae88ed495c06b4',
        'client_secret' =>'64a35ed7b42f8d1766d9a953fe2bb22993c6f8bf',
        'redirect' => 'http://localhost:8000/git/callback'
    ],
];
