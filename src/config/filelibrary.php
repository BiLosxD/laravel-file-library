<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Storage
    |--------------------------------------------------------------------------
    | Supported: "public", "s3"
    */
    'storage' => 'public',
    
    /*
    |--------------------------------------------------------------------------
    | AWS S3 URL
    |--------------------------------------------------------------------------
    | Example Format: https://your-domain.s3-ap-southeast-1.amazonaws.com/
    */
    's3_url' => env('S3_URL', null)
];