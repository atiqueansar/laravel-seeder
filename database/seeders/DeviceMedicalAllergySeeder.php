<?php

namespace Database\Seeders;

use App\Models\DeviceMedicalAllergy;
use Illuminate\Database\Seeder;

class DeviceMedicalAllergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceMedicalAllergy::factory()->count(config('services.seeder_limit'))->create();
    }
}
