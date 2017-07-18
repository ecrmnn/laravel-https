<?php

namespace Ecrmnn\LaravelHttps\Providers;

use Illuminate\Support\ServiceProvider as Provider;

class ServiceProvider extends Provider
{
    public function boot()
    {
       //
    }

    public function register()
    {
        if (env('HTTPS')) {
            $this->app['url']->forceScheme('https');
        }
    }
}
