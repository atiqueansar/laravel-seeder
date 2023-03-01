<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceCategory extends Model
{
    use HasFactory;
    protected $table = 'device_category';
    protected $guarded = ['*'];
    public $timestamps = false;
}
