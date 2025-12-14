<?php

namespace Modules\MarketMonitoring\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class MarketMonitoringServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Route::middleware('api')
            ->prefix('api/market-monitoring')
            ->group(__DIR__.'/../Routes/api.php');
    }
}
