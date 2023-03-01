<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevicePlace extends Model
{
    use HasFactory;
    protected $table = 'device_place';
    protected $guarded = ['*'];
    public $timestamps = false;
}
