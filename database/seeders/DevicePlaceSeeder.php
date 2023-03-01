<?php

namespace Database\Seeders;

use App\Models\DevicePlace;
use Illuminate\Database\Seeder;

class DevicePlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DevicePlace::factory()->count(config('services.seeder_limit'))->create();
    }
}
