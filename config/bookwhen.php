<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Bookwhen API Key
    |--------------------------------------------------------------------------
    |
    | Here you may specify your Bookwhen API Key. This will be
    | used to authenticate with the Bookwhen API.
    */

    'api_key' => env('BOOKWHEN_API_KEY'),
    
    /*
     |--------------------------------------------------------------------------
     | Bookwhen route prefix and middleware
     |--------------------------------------------------------------------------
     |
     | Here you may specify a reoute prefix and middleware for the default 
     | routes.
     */
    
    'prefix' => 'bookwhen',
    'middleware' => ['web']
];
