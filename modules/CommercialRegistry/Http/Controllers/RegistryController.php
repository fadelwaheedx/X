<?php

namespace Modules\CommercialRegistry\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class RegistryController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'module' => 'Commercial Registry',
            'features' => ['business_identity', 'capital_tracking', 'licensing'],
        ]);
    }
}
