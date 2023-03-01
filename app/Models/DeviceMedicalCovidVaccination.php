<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceMedicalCovidVaccination extends Model
{
    use HasFactory;
    protected $table = 'device_medical_covid_vaccination';
    protected $guarded = ['*'];
    public $timestamps = false;
}
