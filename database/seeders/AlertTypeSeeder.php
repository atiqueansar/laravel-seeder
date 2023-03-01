<?php

namespace Database\Seeders;

use App\Models\AlertType;
use Illuminate\Database\Seeder;

class AlertTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlertType::factory()->count(config('services.seeder_limit'))->create();
    }
}
