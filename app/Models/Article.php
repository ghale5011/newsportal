<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'author_id',
        'content',
        'image',
        'meta_title',
        'meta_description',
    ];

    //relationships with author and categories
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
     public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
