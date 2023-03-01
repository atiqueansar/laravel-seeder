<?php

namespace Database\Seeders;

use App\Models\DevicePhonebook;
use Illuminate\Database\Seeder;

class DevicePhonebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DevicePhonebook::factory()->count(config('services.seeder_limit'))->create();
    }
}
