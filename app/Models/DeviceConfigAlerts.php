<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceConfigAlerts extends Model
{
    use HasFactory;
    protected $table = 'device_config_alerts';
    protected $guarded = ['*'];
    public $timestamps = false;
}
