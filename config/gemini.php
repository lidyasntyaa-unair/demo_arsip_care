<?php

return [
    'api_key' => env('GEMINI_API_KEY'),
    'request_timeout' => env('GEMINI_REQUEST_TIMEOUT', 30),

    // Matikan verifikasi SSL untuk koneksi HTTP Guzzle di local dev
    'client_options' => [
        'verify' => false,
    ],
];
