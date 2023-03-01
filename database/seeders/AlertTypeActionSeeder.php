<?php

namespace Database\Seeders;

use App\Models\AlertTypeAction;
use Illuminate\Database\Seeder;

class AlertTypeActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlertTypeAction::factory()->count(config('services.seeder_limit'))->create();
    }
}
