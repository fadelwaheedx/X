<?php

namespace Modules\Borders\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BordersServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Route::middleware('api')
            ->prefix('api/borders')
            ->group(__DIR__.'/../Routes/api.php');
    }
}
