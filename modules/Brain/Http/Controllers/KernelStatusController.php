<?php

namespace Modules\Brain\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class KernelStatusController extends Controller
{
    public function __invoke(): JsonResponse
    {
        return response()->json([
            'kernel' => 'EcoSys Brain',
            'capabilities' => [
                'sso',
                'acl',
                'audit_log',
                'offline_token',
                'contracts_api',
            ],
        ]);
    }
}
