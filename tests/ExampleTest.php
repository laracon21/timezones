<?php

namespace Laracon21\Timezones\Tests;

use Orchestra\Testbench\TestCase;
use Laracon21\Timezones\TimezonesServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TimezonesServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
