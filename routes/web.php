<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return [
        'app' => config('app.name'),
        'architecture' => 'EcoSys modular monolith (brain & limbs model)',
        'modules' => config('modules.manifest'),
    ];
});
