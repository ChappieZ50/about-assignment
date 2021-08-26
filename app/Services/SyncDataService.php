<?php

namespace App\Services;

use App\Models\Capsule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class SyncDataService
{

    protected $url = 'https://api.spacexdata.com/v3/capsules';

    public function capsules()
    {
        $capsules = Http::get($this->url);
        return $capsules->successful() ? $capsules->json() : false;
    }

    public function sync($capsules)
    {
        foreach ($capsules as $capsule) {
            $capsule['missions'] = json_encode($capsule['missions']);
            $record = Capsule::where('capsule_serial', $capsule['capsule_serial'])->first();
            !$record ? Capsule::create($capsule) : $record->update($capsule);
        }
    }


}
