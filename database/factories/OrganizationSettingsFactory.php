<?php

namespace Database\Factories;

use App\Models\OrganizationSettings;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationSettingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = OrganizationSettings::orderBy('organization_id', 'desc')->first();
        return [
            'organization_id' => (!empty($lastRow)) ? $lastRow->organization_id + 1 : 1,
            'alert_type_id' => (!empty($lastRow)) ? $lastRow->alert_type_id + 1 : 1,
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
            'emergency_number_drill' => (!empty($lastRow)) ? $lastRow->emergency_number_drill + 1 : 1,
        ];
    }
}
