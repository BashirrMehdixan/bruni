<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class More extends Model
{
    use Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'description',
        'thumbnail',
        'status'
    ];

    protected $casts = [
        'thumbnail' => 'array'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
