<?php

namespace App\Http\Controllers;

use App\Services\CapsuleService;

class CapsuleController extends Controller
{
    public function index(CapsuleService $service)
    {
        return $service->capsules();
    }

    public function show($capsule_serial, CapsuleService $service)
    {
        return $service->capsuleBySerial($capsule_serial);
    }
}
