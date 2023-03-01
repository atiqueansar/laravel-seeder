<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceMedicalCovid extends Model
{
    use HasFactory;
    protected $table = 'device_medical_covid';
    protected $guarded = ['*'];
    public $timestamps = false;
}
