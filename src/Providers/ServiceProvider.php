<?php

namespace Ecrmnn\LaravelHttps\Providers;

use Illuminate\Support\ServiceProvider as Provider;

class ServiceProvider extends Provider
{
    public function boot()
    {
        $this->publishes([
            $this->getConfigPath() => config_path('https.php'),
        ], 'config');

        if (config('https.force')) {
            $this->app['url']->forceScheme('https');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom($this->getConfigPath(), 'https');
    }

    private function getConfigPath()
    {
        return dirname(__DIR__, 2) . '/config/https.php';
    }
}
