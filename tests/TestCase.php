<?php

namespace Erkurn\LaravelOrder\Tests;

use Erkurn\LaravelOrder\LaravelOrderServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Erkurn\\LaravelOrder\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelOrderServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        $migration = include __DIR__.'/../database/migrations/create_laravel_orders_table.php';
        $migration->up();

        $migration = include __DIR__.'/../database/migrations/create_laravel_order_items_table.php';
        $migration->up();
    }
}
