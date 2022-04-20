<?php

namespace Erkurn\LaravelOrder;

use Illuminate\Support\ServiceProvider;

class LaravelOrderServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/order.php',
            'order'
        );
    }

    public function boot()
    {
        /** Config */
        $this->publishes([
            __DIR__.'/../config/order.php' => config_path('order.php'),
        ]);

        /** Migrations */
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
