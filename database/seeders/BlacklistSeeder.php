<?php

namespace Database\Seeders;

use App\Models\Blacklist;
use Illuminate\Database\Seeder;

class BlacklistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blacklist::factory()->count(config('services.seeder_limit'))->create();
    }
}
