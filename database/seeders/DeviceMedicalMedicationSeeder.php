<?php

namespace Database\Seeders;

use App\Models\DeviceMedicalMedication;
use Illuminate\Database\Seeder;

class DeviceMedicalMedicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceMedicalMedication::factory()->count(config('services.seeder_limit'))->create();
    }
}
