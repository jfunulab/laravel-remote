<?php

namespace Jfunulab\LaravelRemote\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Jfunulab\LaravelRemote\LaravelRemoteServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Jfunulab\\LaravelRemote\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelRemoteServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-remote_table.php.stub';
        $migration->up();
        */
    }
}
