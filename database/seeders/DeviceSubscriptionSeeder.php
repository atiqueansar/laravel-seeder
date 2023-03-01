<?php

namespace Database\Seeders;

use App\Models\DeviceSubscription;
use Illuminate\Database\Seeder;

class DeviceSubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceSubscription::factory()->count(config('services.seeder_limit'))->create();
    }
}
