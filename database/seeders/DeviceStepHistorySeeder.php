<?php

namespace Database\Seeders;

use App\Models\DeviceStepHistory;
use Illuminate\Database\Seeder;

class DeviceStepHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceStepHistory::factory()->count(config('services.seeder_limit'))->create();
    }
}
