<?php

namespace App\Listeners;

use App\Events\SyncStartedEvent;
use Illuminate\Support\Facades\Log;

class SyncStartedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function handle(SyncStartedEvent $event)
    {
        Log::info('Syncing SpaceX Data');
    }
}
