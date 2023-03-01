<?php

namespace Database\Seeders;

use App\Models\ZonePoint;
use Illuminate\Database\Seeder;

class ZonePointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ZonePoint::factory()->count(config('services.seeder_limit'))->create();
    }
}
