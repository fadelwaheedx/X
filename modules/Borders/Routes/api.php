<?php

use Illuminate\Support\Facades\Route;
use Modules\Borders\Http\Controllers\ManifestController;

Route::get('/manifests', [ManifestController::class, 'index']);
