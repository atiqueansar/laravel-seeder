<?php

namespace Database\Seeders;

use App\Models\DeviceMedicalMedicationHour;
use Illuminate\Database\Seeder;

class DeviceMedicalMedicationHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceMedicalMedicationHour::factory()->count(config('services.seeder_limit'))->create();
    }
}
