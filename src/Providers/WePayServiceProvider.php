<?php

namespace KevinEm\WePay\Laravel\Providers;


use Illuminate\Support\ServiceProvider;
use KevinEm\WePay\Laravel\WePayLaravel;

class WePayServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $config = $this->app['path.config'] . '/wepay.php';

        $this->publishes([
            __DIR__ . '/../config.php' => $config
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config.php', 'wepay');

        $this->app->bind('wepay', function ($app) {
            return new WePayLaravel($app['config']['wepay']);
        });
    }
}