# WePay for Laravel 5

[![Latest Stable Version](https://poser.pugx.org/kevinem/wepay-laravel/v/stable?format=flat-square)](https://packagist.org/packages/kevinem/nonprofit-explorer-laravel)
[![License](https://poser.pugx.org/kevinem/wepay-laravel/license?format=flat-square)](https://packagist.org/packages/kevinem/nonprofit-explorer-laravel)
[![Build Status](https://travis-ci.org/kevinem/wepay-laravel.svg?branch=master)](https://travis-ci.org/kevinem/nonprofit-explorer-laravel)

## Installation

To install, use composer:

```
composer require kevinem/wepay-laravel
```

## Documentation

https://www.wepay.com/developer

## Configuration

After installing the package, register the `KevinEm\WePay\Laravel\Providers\WePayServiceProvider::class`
in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    KevinEm\WePay\Laravel\Providers\WePayServiceProvider::class,
],

```
Also, you can add the `WePayLaravel` facade to the `aliases` array in your `config/app.php` configuration file:

```php
'aliases' => [
    // Other facades...
    
    'WePayLaravel' => KevinEm\WePay\Laravel\Facades\WePayLaravel::class,
],
```

Publish the config using the following command:

```php
$ php artisan vendor:publish
```

## Example Usage

```php

$account = [
    'name' => 'some account name',
    'description' => 'a description',
    'type' => 'personal',
    'image_uri' => 'https://someurl.com',
    'gaq_domains' => [],
    'mcc' => 7299,
    'country' => 'US',
    'currencies' => ['USD']
];

\WePayLaravel::account()->create($account);

$membership = [
    'account_id' => 'some_account_id',
    'member_access_token' => 'access_token',
    'role' => 'admin',
    'admin_context' => [
        'reason' => 'beneficiary'
    ]
];

\WePayLaravel::accountMembership()->create($membership);

// assuming user access token is stored
$user_access_token = $user->getAccessToken();
\WePayLaravel::account($user_access_token)->modify([
    'name' => 'updated account name'
]);

```

## License 

The MIT License (MIT)
Copyright (c) 2017 Kevin Em

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
documentation files (the "Software"), to deal in the Software without restriction, including without limitation
the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software,
and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of
the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
IN THE SOFTWARE.
