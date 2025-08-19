<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
   use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    // 🔗 One Category has many Subcategories
    public function subcategories() :HasMany
    {
        return $this->hasMany(Subcategory::class);
    }

    // 🔗 One Category has many Posts
    public function posts() : HasMany
    {
        return $this->hasMany(Post::class);
    }
}
