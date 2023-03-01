<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceSettingDefault extends Model
{
    use HasFactory;
    protected $table = 'device_setting_default';
    protected $guarded = ['*'];
    public $timestamps = false;
}
