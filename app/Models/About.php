<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'description',
        'privacy',
        'thumbnail',
        'video_type',
        'video',
        'url',
    ];
}
