<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sequelizemeta extends Model
{
    use HasFactory;
    protected $table = 'Sequelizemeta';
    protected $guarded = ['*'];
    public $timestamps = false;
}
