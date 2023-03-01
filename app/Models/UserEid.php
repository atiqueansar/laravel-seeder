<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEid extends Model
{
    use HasFactory;
    protected $table = 'user_eid';
    protected $guarded = ['*'];
    public $timestamps = false;
}
