<?php

namespace Database\Seeders;

use App\Models\DeviceSettingDefault;
use Illuminate\Database\Seeder;

class DeviceSettingDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceSettingDefault::factory()->count(config('services.seeder_limit'))->create();
    }
}
