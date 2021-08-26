<?php


namespace App\Services;


use App\Models\Capsule;

class CapsuleService
{
    public function capsules()
    {
        return request()->has('status') ? $this->filterByStatus() : Capsule::all();
    }

    public function capsuleBySerial($serial)
    {
        return Capsule::where('capsule_serial', $serial)->first();
    }

    public function filterByStatus()
    {
        $status = explode(',', str_replace('|', ',', request()->get('status')));
        return Capsule::whereIn('status', $status)->get();
    }
}
