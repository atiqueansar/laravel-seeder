<?php

namespace Database\Seeders;

use App\Models\UserEid;
use Illuminate\Database\Seeder;

class UserEidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserEid::factory()->count(config('services.seeder_limit'))->create();
    }
}
