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

    'facebook' => [
     'client_id' => '506837691110222',
     'client_secret' => 'c3d118a12369fdc90923e26bfd66620e',
     'redirect' => 'http://vivomoments.com/user/callback/facebook',
   ],

    'google' => [
        'client_id' => '633853710098-bivnqkf91ekffteofqlmf8u31o63cu3g.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://vivomoments.com/user/callback/google',
    ],

];
