<?php

namespace Rayblair\RemoveMassAssignment\Tests;

use Orchestra\Testbench\TestCase;
use Rayblair\RemoveMassAssignment\RemoveMassAssignmentServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [RemoveMassAssignmentServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
