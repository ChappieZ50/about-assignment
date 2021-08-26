<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class CapsulesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCapsules()
    {
        $response = $this->call('GET','/api/capsules');

        $this->assertEquals(200,$response->status());
    }
}
