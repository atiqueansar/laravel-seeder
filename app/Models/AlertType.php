<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlertType extends Model
{
    use HasFactory;
    protected $table = 'alert_type';
    protected $guarded = ['*'];
    public $timestamps = false;
}
