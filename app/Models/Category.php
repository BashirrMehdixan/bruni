<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail',
        'status',
        'order'
    ];

    public function arts(): HasMany
    {
        return $this->hasMany(Art::class);
    }
}
