<?php

namespace Tests;
use Kreait\laravel\Firebase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    protected function getPackageProviders($app)
    {
        return [Firebase\ServiceProvider::class];
    }

}
