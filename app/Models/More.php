<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class More extends Model
{
    use Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'collection_id',
        'thumbnail',
        'cover_photo',
        'description',
        'status',
    ];

    protected $casts = [
        'thumbnail' => 'array'
    ];

    public function collection(): BelongsTo
    {
        return $this->belongsTo(Collection::class);
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
