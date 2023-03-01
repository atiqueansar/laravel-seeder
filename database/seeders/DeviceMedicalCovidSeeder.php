<?php

namespace Database\Seeders;

use App\Models\DeviceMedicalCovid;
use Illuminate\Database\Seeder;

class DeviceMedicalCovidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceMedicalCovid::factory()->count(config('services.seeder_limit'))->create();
    }
}
