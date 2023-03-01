<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceSetting extends Model
{
    use HasFactory;
    protected $table = 'device_setting';
    protected $guarded = ['*'];
    public $timestamps = false;
}
