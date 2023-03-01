<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZonePoint extends Model
{
    use HasFactory;
    protected $table = 'zone_point';
    protected $guarded = ['*'];
    public $timestamps = false;
}
