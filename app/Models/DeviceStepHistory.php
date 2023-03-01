<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceStepHistory extends Model
{
    use HasFactory;
    protected $table = 'device_step_history';
    protected $guarded = ['*'];
    public $timestamps = false;
}
