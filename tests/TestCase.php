<?php

namespace DebianMoor\JokedHacker;

use DebianMoor\JokedHacker\Providers\JokedHackerServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            JokedHackerServiceProvider::class
        ];
    }
}
