<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceEid extends Model
{
    use HasFactory;
    protected $table = 'device_eid';
    protected $guarded = ['*'];
    public $timestamps = false;
}
