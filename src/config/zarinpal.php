<?php

return [
    /*
    |--------------------------------------------------------------------------
    | merchantID
    |--------------------------------------------------------------------------
    |
    | merchantID must be 36 chars
    |
    */
    'merchantID' => env('ZARINPAL_MERCHANTID', 'test'),

    /*
    |--------------------------------------------------------------------------
    | client
    |--------------------------------------------------------------------------
    |
    | Available clients: 'Guzzle', 'Soap'
    |
    */
    'client' => env('ZARINPAL_CLIENT', 'Guzzle'),

    /*
    |--------------------------------------------------------------------------
    | language
    |--------------------------------------------------------------------------
    |
    | Available languages: 'fa', 'en'
    |
    */
    'lang' => env('ZARINPAL_LANG', 'fa'),

    /*
    |--------------------------------------------------------------------------
    | sandbox
    |--------------------------------------------------------------------------
    |
    | true: '1', false: '0'
    |
    */
    'sandbox' => env('ZARINPAL_SANDBOX', '0'),

];
