<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('modules', function () {
            return collect(config('modules.manifest'))->map(function ($module) {
                $module['namespace'] = $module['namespace'] ?? null;
                return $module;
            });
        });
    }

    public function boot(): void
    {
        $modules = collect(config('modules.manifest'));

        $modules->each(function (array $module) {
            if (! empty($module['provider'])) {
                $this->app->register($module['provider']);
            }
        });
    }
}
