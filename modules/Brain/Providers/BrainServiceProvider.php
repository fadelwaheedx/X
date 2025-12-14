<?php

namespace Modules\Brain\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BrainServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Route::middleware('api')
            ->prefix('api/brain')
            ->group(__DIR__.'/../Routes/api.php');
    }
}
