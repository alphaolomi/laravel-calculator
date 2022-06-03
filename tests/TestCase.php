<?php

namespace JasiriLabs\Calculator\Tests;

use JasiriLabs\Calculator\CalculatorServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;


class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [CalculatorServiceProvider::class,];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
