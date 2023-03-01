<?php

namespace Database\Seeders;

use App\Models\Sequelizemeta;
use Illuminate\Database\Seeder;

class SequelizemetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sequelizemeta::factory()->count(config('services.seeder_limit'))->create();
    }
}
