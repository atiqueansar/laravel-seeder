<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CycleProcess extends Model
{
    use HasFactory;
    protected $table = 'cycle_process';
    protected $guarded = ['*'];
    public $timestamps = false;
}
