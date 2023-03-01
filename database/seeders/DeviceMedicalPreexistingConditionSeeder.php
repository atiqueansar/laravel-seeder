<?php

namespace Database\Seeders;

use App\Models\DeviceMedicalPreexistingCondition;
use Illuminate\Database\Seeder;

class DeviceMedicalPreexistingConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceMedicalPreexistingCondition::factory()->count(config('services.seeder_limit'))->create();
    }
}
