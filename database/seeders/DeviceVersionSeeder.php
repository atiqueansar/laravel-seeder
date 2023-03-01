<?php

namespace Database\Seeders;

use App\Models\DeviceVersion;
use Illuminate\Database\Seeder;

class DeviceVersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceVersion::factory()->count(config('services.seeder_limit'))->create();
    }
}
