<?php

return [
    'manifest' => [
        [
            'name' => 'Brain',
            'namespace' => 'Modules\\Brain',
            'provider' => Modules\Brain\Providers\BrainServiceProvider::class,
            'description' => 'Identity kernel (SSO, ACL, Audit Log, Offline Token, Contracts API).',
        ],
        [
            'name' => 'Borders',
            'namespace' => 'Modules\\Borders',
            'provider' => Modules\Borders\Providers\BordersServiceProvider::class,
            'description' => 'Entry, manifests, import controls.',
        ],
        [
            'name' => 'CommercialRegistry',
            'namespace' => 'Modules\\CommercialRegistry',
            'provider' => Modules\CommercialRegistry\Providers\CommercialRegistryServiceProvider::class,
            'description' => 'Business identity, capital, licensing.',
        ],
        [
            'name' => 'MarketMonitoring',
            'namespace' => 'Modules\\MarketMonitoring',
            'provider' => Modules\MarketMonitoring\Providers\MarketMonitoringServiceProvider::class,
            'description' => 'Prices, inspections, reconciliation.',
        ],
        [
            'name' => 'HRMSHRIS',
            'namespace' => 'Modules\\HRMSHRIS',
            'provider' => Modules\HRMSHRIS\Providers\HRMSHRISServiceProvider::class,
            'description' => 'HR records, account linkage, lifecycle events.',
        ],
    ],
];
