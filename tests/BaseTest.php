<?php

namespace Ecrmnn\LaravelHttps\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

abstract class BaseTest extends Orchestra
{
    public function setUp()
    {
        putenv('HTTPS=true');

        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return ['Ecrmnn\LaravelHttps\Providers\ServiceProvider'];
    }
}
