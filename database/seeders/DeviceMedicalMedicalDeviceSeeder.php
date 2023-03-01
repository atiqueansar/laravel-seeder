<?php

namespace Database\Seeders;

use App\Models\DeviceMedicalMedicalDevice;
use Illuminate\Database\Seeder;

class DeviceMedicalMedicalDeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceMedicalMedicalDevice::factory()->count(config('services.seeder_limit'))->create();
    }
}
