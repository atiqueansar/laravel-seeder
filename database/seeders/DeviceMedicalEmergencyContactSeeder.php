<?php

namespace Database\Seeders;

use App\Models\DeviceMedicalEmergencyContact;
use Illuminate\Database\Seeder;

class DeviceMedicalEmergencyContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceMedicalEmergencyContact::factory()->count(config('services.seeder_limit'))->create();
    }
}
