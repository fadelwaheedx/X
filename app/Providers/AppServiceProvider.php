<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Bind shared kernel services here.
    }

    public function boot(): void
    {
        // Application-wide bootstrapping.
    }
}
