<?php

use Illuminate\Support\Facades\Route;
use Modules\HRMSHRIS\Http\Controllers\LifecycleController;

Route::get('/lifecycle-events', [LifecycleController::class, 'index']);
