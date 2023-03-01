<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationSettings extends Model
{
    use HasFactory;
    protected $table = 'organization_settings';
    protected $guarded = ['*'];
    public $timestamps = false;
}
