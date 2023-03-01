<?php

namespace Database\Seeders;

use App\Models\SpecialNeed;
use Illuminate\Database\Seeder;

class SpecialNeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpecialNeed::factory()->count(config('services.seeder_limit'))->create();
    }
}
