<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceMedicalEmergencyContact extends Model
{
    use HasFactory;
    protected $table = 'device_medical_emergency_contact';
    protected $guarded = ['*'];
    public $timestamps = false;
}
