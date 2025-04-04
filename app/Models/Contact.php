<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'address',
        'phone',
        'email',
        'map',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'tiktok',
    ];
}
