<?php

namespace Database\Seeders;

use App\Models\DeviceMedicalCovidVaccination;
use Illuminate\Database\Seeder;

class DeviceMedicalCovidVaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceMedicalCovidVaccination::factory()->count(config('services.seeder_limit'))->create();
    }
}
