<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceMedicalAllergy extends Model
{
    use HasFactory;
    protected $table = 'device_medical_allergy';
    protected $guarded = ['*'];
    public $timestamps = false;
}
