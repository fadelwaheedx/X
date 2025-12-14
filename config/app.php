<?php

return [
    'name' => env('APP_NAME', 'MikroTik Wizard'),
    'env' => env('APP_ENV', 'local'),
    'debug' => (bool) env('APP_DEBUG', true),
    'url' => env('APP_URL', 'http://localhost'),
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => env('APP_KEY'),
    'cipher' => 'AES-256-CBC',

    'providers' => [
        App\Providers\AppServiceProvider::class,
        App\Providers\ModuleServiceProvider::class,
    ],

    'aliases' => [
        // Aliases can be added here as needed.
    ],
];
