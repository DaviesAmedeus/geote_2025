<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategory extends Model
{
     use HasFactory, Sluggable;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
    ];

    // Subcategory belongs to a Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Subcategory has many Posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }


    public function sluggable(): array
    {
        return [
            'slug'=> [
                'source'=> 'name'
            ]
        ];
    }
}
