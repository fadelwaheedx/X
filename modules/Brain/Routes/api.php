<?php

use Illuminate\Support\Facades\Route;
use Modules\Brain\Http\Controllers\KernelStatusController;

Route::get('/status', KernelStatusController::class);
