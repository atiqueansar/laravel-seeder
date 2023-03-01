<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceEmergency extends Model
{
    use HasFactory;
    protected $table = 'device_emergency';
    protected $guarded = ['*'];
    public $timestamps = false;
}
