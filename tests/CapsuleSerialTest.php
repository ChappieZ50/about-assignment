<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class CapsuleSerialTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCapsuleStatus()
    {

        $response = $this->call('GET','/api/capsules/C101');

        $this->assertEquals(200,$response->status());
    }
}
