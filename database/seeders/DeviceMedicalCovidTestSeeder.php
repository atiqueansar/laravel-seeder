<?php

namespace Database\Seeders;

use App\Models\DeviceMedicalCovidTest;
use Illuminate\Database\Seeder;

class DeviceMedicalCovidTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceMedicalCovidTest::factory()->count(config('services.seeder_limit'))->create();
    }
}
