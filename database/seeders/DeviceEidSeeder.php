<?php

namespace Database\Seeders;

use App\Models\DeviceEid;
use Illuminate\Database\Seeder;

class DeviceEidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceEid::factory()->count(config('services.seeder_limit'))->create();
    }
}
