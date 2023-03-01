<?php

namespace Database\Seeders;

use App\Models\DeviceEmergency;
use Illuminate\Database\Seeder;

class DeviceEmergencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceEmergency::factory()->count(config('services.seeder_limit'))->create();
    }
}
