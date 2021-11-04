<?php declare(strict_types=1);

namespace Tests;

use Dive\Fez\Nova\FieldServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [FieldServiceProvider::class];
    }
}
