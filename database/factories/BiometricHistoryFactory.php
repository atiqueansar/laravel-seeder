<?php

namespace Database\Factories;

use App\Models\BiometricHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class BiometricHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = BiometricHistory::orderBy('device_id', 'desc')->first();
        return [
//            'id' => (!empty($lastRow)) ? $lastRow->id + 1 : 1,
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
        ];
    }
}
