<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceSubscription extends Model
{
    use HasFactory;
    protected $table = 'device_subscription';
    protected $guarded = ['*'];
    public $timestamps = false;
}
