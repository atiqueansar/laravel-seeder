<?php

namespace Database\Seeders;

use App\Models\DeviceShare;
use Illuminate\Database\Seeder;

class DeviceShareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceShare::factory()->count(config('services.seeder_limit'))->create();
    }
}
