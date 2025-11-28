<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use Sluggable;
    protected $fillable = ['name', 'slug', 'order','cover', 'status'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }
    protected function casts(): array
    {
        return [
            'status' => 'boolean',
        ];
    }
}
