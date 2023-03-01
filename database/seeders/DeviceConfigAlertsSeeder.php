<?php

namespace Database\Seeders;

use App\Models\DeviceConfigAlerts;
use Illuminate\Database\Seeder;

class DeviceConfigAlertsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceConfigAlerts::factory()->count(config('services.seeder_limit'))->create();
    }
}
