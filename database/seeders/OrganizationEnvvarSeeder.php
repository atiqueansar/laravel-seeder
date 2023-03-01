<?php

namespace Database\Seeders;

use App\Models\OrganizationEnvvar;
use Illuminate\Database\Seeder;

class OrganizationEnvvarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrganizationEnvvar::factory()->count(config('services.seeder_limit'))->create();
    }
}
