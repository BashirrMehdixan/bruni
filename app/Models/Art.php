<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Art extends Model
{
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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
