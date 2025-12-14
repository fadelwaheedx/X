<?php

namespace Modules\HRMSHRIS\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class HRMSHRISServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Route::middleware('api')
            ->prefix('api/hrms')
            ->group(__DIR__.'/../Routes/api.php');
    }
}
