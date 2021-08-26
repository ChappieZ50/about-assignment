<?php

namespace App\Console\Commands;

use App\Events\SyncCompleteEvent;
use App\Events\SyncStartedEvent;
use App\Services\SyncDataService;
use Illuminate\Console\Command;


/**
 * Class GetDataCommand
 * Getting SpaceX Data and sync them into database
 */
class SyncDataCommand extends Command
{
    protected $signature = "sync:data";
    protected $description = "Getting SpaceX Data and sync them into database";

    public function handle(SyncDataService $service)
    {
        event(new SyncStartedEvent());
        $capsules = $service->capsules();

        if ($capsules) {
            $service->sync($capsules);
            event(new SyncCompleteEvent());
            $this->info('Sync is done');
            return 0;
        }
        $this->error('Error');

        return 1;
    }
}
