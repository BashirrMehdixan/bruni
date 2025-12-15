<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'title',
        'message',
    ];
}
