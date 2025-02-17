<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Collection extends Model
{
    use Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail',
        'status',
    ];

    public function arts(): HasMany
    {
        return $this->hasMany(More::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
