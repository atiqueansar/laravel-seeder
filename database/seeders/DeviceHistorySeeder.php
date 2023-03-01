<?php

namespace Database\Seeders;

use App\Models\DeviceHistory;
use Illuminate\Database\Seeder;

class DeviceHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceHistory::factory()->count(config('services.seeder_limit'))->create();
    }
}
