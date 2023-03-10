<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrganization extends Model
{
    use HasFactory;
    protected $table = 'user_organization';
    protected $guarded = ['*'];
    public $timestamps = false;
}
