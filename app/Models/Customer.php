<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'customers';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'is_active',
        'is_verified',
        'verification_code'
    ];

    protected $hidden = [
        'password',
    ];
}
