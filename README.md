# <img src="https://raw.githubusercontent.com/ecrmnn/laravel-https/master/laravel-https.png" alt="laravel-https">

> Generate HTTPS-links and redirect all requests to HTTPS. Also works with load balancing, AWS, Heroku and other 
services 

[![](https://img.shields.io/travis/ecrmnn/laravel-https/master.svg?style=flat-square)](https://travis-ci.org/ecrmnn/laravel-https/builds)
[![](https://img.shields.io/packagist/dt/ecrmnn/laravel-https.svg?style=flat-square)](https://packagist.org/packages/ecrmnn/laravel-https)
[![](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://opensource.org/licenses/MIT)
[![](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](http://makeapullrequest.com)
[![](https://img.shields.io/badge/code_style-PSR_2-blue.svg?style=flat-square)](http://www.php-fig.org/psr/psr-2/)

### Installation 
##### Add to your project using Composer
```bash
composer require ecrmnn/laravel-https
```

##### Add under ``providers`` in ``config/app.php``
```php
\Ecrmnn\LaravelHttps\Providers\ServiceProvider::class,
```

##### Add under ``$middleware`` in ``app/Http/Kernel.php``
```php
\Ecrmnn\LaravelHttps\Http\Middleware\ForceHttps::class,
```

### Usage
##### Set environment variable
*HTTPS will only be forced when ``env('HTTPS')`` is set to ``true``*
```bash
HTTPS=true
```

### What is this?
##### Generate HTTPS-links automagically 
``LaravelHTTPS`` forces the URL scheme in Laravel to use the HTTPS prefix for all links generated using ``url()`` 
and ``route()``. That mean that all your links can be converted to use HTTPS just by installing ``LaravelHTTPS``

##### Force redirect HTTP to HTTPS
With the middleware included; ``ForceHttps``, you can simply specify that as a global middleware and all requests 
will be redirected correctly when accessing a non-HTTPS URL.

### Requirements
- Laravel 5.0 +
- PHP 7 +

### License
MIT © [Daniel Eckermann](http://danieleckermann.com)
