<?php

namespace Database\Factories;

use App\Models\DeviceMedicalMedicationHour;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceMedicalMedicationHourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceMedicalMedicationHour::orderBy('device_medical_medication_id', 'desc')->first();
        return [
            'device_medical_medication_id' => (!empty($lastRow)) ? $lastRow->device_medical_medication_id + 1 : 1,
            'hour' => now()->format('H:i:s'),
        ];
    }
}
