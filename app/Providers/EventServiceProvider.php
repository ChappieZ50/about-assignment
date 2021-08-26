<?php

namespace App\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \App\Events\SyncCompleteEvent::class => [
            \App\Listeners\SyncCompleteListener::class,
        ],
        \App\Events\SyncStartedEvent::class  => [
            \App\Listeners\SyncStartedListener::class,
        ]
    ];
}
