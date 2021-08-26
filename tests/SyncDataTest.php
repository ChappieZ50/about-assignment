<?php


class SyncDataTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSyncData()
    {
     $this->artisan('sync:data')->expectsOutput('Sync is done')
         ->assertExitCode(0);
    }
}
