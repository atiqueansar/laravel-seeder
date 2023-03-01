<?php

namespace Database\Seeders;

use App\Models\DeviceSetting;
use Illuminate\Database\Seeder;

class DeviceSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceSetting::factory()->count(config('services.seeder_limit'))->create();
    }
}
