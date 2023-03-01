<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubscriptionHistory extends Model
{
    use HasFactory;
    protected $table = 'user_subscription_history';
    protected $guarded = ['*'];
    public $timestamps = false;
}
