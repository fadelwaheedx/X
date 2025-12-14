<?php

use Illuminate\Support\Facades\Route;
use Modules\CommercialRegistry\Http\Controllers\RegistryController;

Route::get('/businesses', [RegistryController::class, 'index']);
