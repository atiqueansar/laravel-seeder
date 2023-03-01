<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationEnvvar extends Model
{
    use HasFactory;
    protected $table = 'organization_envvar';
    protected $guarded = ['*'];
    public $timestamps = false;
}
