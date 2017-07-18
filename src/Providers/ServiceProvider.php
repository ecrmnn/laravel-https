<?php

namespace Ecrmnn\LaravelHttps\Providers;

use Illuminate\Support\ServiceProvider as Provider;

class ServiceProvider extends Provider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        if (env('HTTPS')) {
            $this->app['url']->forceScheme('https');
        }
    }
}
