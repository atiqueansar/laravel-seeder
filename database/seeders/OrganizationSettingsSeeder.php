<?php

namespace Database\Seeders;

use App\Models\OrganizationSettings;
use Illuminate\Database\Seeder;

class OrganizationSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrganizationSettings::factory()->count(config('services.seeder_limit'))->create();
    }
}
