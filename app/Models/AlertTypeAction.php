<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlertTypeAction extends Model
{
    use HasFactory;
    protected $table = 'alert_type_action';
    protected $guarded = ['*'];
    public $timestamps = false;
}
