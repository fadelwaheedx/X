<?php

use Illuminate\Support\Facades\Route;
use Modules\MarketMonitoring\Http\Controllers\MonitoringController;

Route::get('/signals', [MonitoringController::class, 'index']);
