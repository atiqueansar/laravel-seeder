<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceMedicalMedicationHour extends Model
{
    use HasFactory;
    protected $table = 'device_medical_medication_hour';
    protected $guarded = ['*'];
    public $timestamps = false;
}
