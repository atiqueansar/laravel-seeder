<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceVersion extends Model
{
    use HasFactory;
    protected $table = 'device_version';
    protected $guarded = ['*'];
    public $timestamps = false;
}
