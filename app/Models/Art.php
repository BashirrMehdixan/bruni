<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Art extends Model
{
    use Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'price',
        'store',
        'work',
        'thumbnail',
        'description',
        'status'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
