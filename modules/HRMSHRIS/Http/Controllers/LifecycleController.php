<?php

namespace Modules\HRMSHRIS\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class LifecycleController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'module' => 'HRMS/HRIS',
            'features' => ['account_linkage', 'leave', 'suspension', 'termination', 'account_deactivation_requests'],
        ]);
    }
}
