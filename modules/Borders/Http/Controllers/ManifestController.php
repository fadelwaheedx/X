<?php

namespace Modules\Borders\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class ManifestController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'module' => 'Borders',
            'features' => ['entry_control', 'manifests', 'import_controls'],
        ]);
    }
}
