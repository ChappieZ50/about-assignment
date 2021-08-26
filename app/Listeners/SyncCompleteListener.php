<?php

namespace App\Listeners;

use App\Events\SyncCompleteEvent;
use App\Models\Capsule;
use Illuminate\Support\Facades\Log;

class SyncCompleteListener
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


    public function handle(SyncCompleteEvent $event)
    {
        $capsules = Capsule::get();
        Log::info('Done SpaceX Data Syncing: ',$capsules);
    }
}
