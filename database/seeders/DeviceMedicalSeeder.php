<?php

namespace Database\Seeders;

use App\Models\DeviceMedical;
use Illuminate\Database\Seeder;

class DeviceMedicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceMedical::factory()->count(config('services.seeder_limit'))->create();
    }
}
