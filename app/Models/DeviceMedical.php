<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceMedical extends Model
{
    use HasFactory;
    protected $table = 'device_medical';
    protected $guarded = ['*'];
    public $timestamps = false;
}
