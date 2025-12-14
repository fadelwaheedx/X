<?php

namespace Modules\MarketMonitoring\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class MonitoringController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'module' => 'Market Monitoring',
            'features' => ['price_tracking', 'inspections', 'reconciliation'],
        ]);
    }
}
