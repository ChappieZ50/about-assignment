<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class CapsuleStatusTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCapsuleStatus()
    {
        $status = array_rand(['active','etc','unknown','retired'],2);

        $response = $this->call('GET','/api/capsules?status'.str_replace(',','|',implode(',',$status)));

        $this->assertEquals(200,$response->status());
    }
}
