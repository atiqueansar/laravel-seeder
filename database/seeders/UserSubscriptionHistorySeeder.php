<?php

namespace Database\Seeders;

use App\Models\UserSubscriptionHistory;
use Illuminate\Database\Seeder;

class UserSubscriptionHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserSubscriptionHistory::factory()->count(config('services.seeder_limit'))->create();
    }
}
