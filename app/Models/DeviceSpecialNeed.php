<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceSpecialNeed extends Model
{
    use HasFactory;
    protected $table = 'device_special_need';
    protected $guarded = ['*'];
    public $timestamps = false;
}
