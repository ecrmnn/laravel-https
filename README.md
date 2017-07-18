# <img src="https://raw.githubusercontent.com/ecrmnn/laravel-https/master/laravel-https.png" alt="laravel-https">

> Redirect all requests to HTTPS. Also works with load balancing, AWS, Heroku and other services 

[![](https://img.shields.io/travis/ecrmnn/laravel-https/master.svg?style=flat-square)](https://travis-ci.org/ecrmnn/laravel-https/builds)
[![](https://poser.pugx.org/ecrmnn/laravel-https/downloads)](https://packagist.org/packages/ecrmnn/laravel-https)
[![](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://opensource.org/licenses/MIT)
[![](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](http://makeapullrequest.com)
[![](https://img.shields.io/badge/code_style-PSR_2-blue.svg?style=flat-square)](http://www.php-fig.org/psr/psr-2/)

### Installation
#### Add to your project using Composer
```bash
composer require ecrmnn/laravel-https
```

#### Add under ``providers`` in ``config/app.php``
```php
\Ecrmnn\LaravelHttps\Providers\LaravelHttpsServiceProvider::class,
```

#### Add under ``$middleware`` in ``app/Http/Kernel.php``
```php
\Ecrmnn\LaravelHttps\Http\Middleware\ForceHttps::class,
```

### Usage
#### Set environment variable
*HTTPS will only be forced when ``env('HTTPS')`` is set to ``true``*
```bash
HTTPS=true
```

### License
MIT © [Daniel Eckermann](http://danieleckermann.com)
