<?php

namespace Database\Seeders;

use App\Models\DeviceSpecialNeed;
use Illuminate\Database\Seeder;

class DeviceSpecialNeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceSpecialNeed::factory()->count(config('services.seeder_limit'))->create();
    }
}
