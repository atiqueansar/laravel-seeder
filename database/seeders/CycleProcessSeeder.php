<?php

namespace Database\Seeders;

use App\Models\CycleProcess;
use Illuminate\Database\Seeder;

class CycleProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CycleProcess::factory()->count(config('services.seeder_limit'))->create();
    }
}
