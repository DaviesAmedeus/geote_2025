<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'status',
        'published_at',
        'author_id',
    ];

    //Post belongs to a Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Post belongs to a Subcategory (optional)
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    // Post belongs to an Author (User)
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }



    public function sluggable(): array
    {
        return [
            'slug' => [
                'source'=> 'title'
            ]
            ];
    }
}
