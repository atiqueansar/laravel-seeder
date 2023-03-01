<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceShare extends Model
{
    use HasFactory;
    protected $table = 'device_share';
    protected $guarded = ['*'];
    public $timestamps = false;
}
