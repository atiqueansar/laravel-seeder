<?php

namespace Database\Seeders;

use App\Models\BiometricHistory;
use Illuminate\Database\Seeder;

class BiometricHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BiometricHistory::factory()->count(config('services.seeder_limit'))->create();
    }
}
