<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceMedicalMedicalDevice extends Model
{
    use HasFactory;
    protected $table = 'device_medical_medical_device';
    protected $guarded = ['*'];
    public $timestamps = false;
}
