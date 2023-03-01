<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceMedicalPreexistingCondition extends Model
{
    use HasFactory;
    protected $table = 'device_medical_preexisting_condition';
    protected $guarded = ['*'];
    public $timestamps = false;
}
