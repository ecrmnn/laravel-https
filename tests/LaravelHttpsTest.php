<?php

namespace Ecrmnn\LaravelHttps\Tests;

use Illuminate\Support\Facades\Route;

class LaravelHttpsTest extends BaseTest
{
    public function testUrlSchemeIsHttps()
    {
        Route::get('xoxo');

        $this->assertSame('https', substr(url()->to('xoxo'), 0, 5));
    }
}
