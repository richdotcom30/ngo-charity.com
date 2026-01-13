<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class BlogPost extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'category',
        'tags',
        'author_name',
        'author_role',
        'author_avatar',
        'published_at',
        'read_time',
        'views',
        'status',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'tags' => 'array',
        'seo_keywords' => 'array',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                    ->where('published_at', '<=', now());
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function getUrlAttribute()
    {
        return route('blog.show', $this->slug);
    }

    public function incrementViews()
    {
        $this->increment('views');
    }

    public function getFeaturedImageUrlAttribute()
    {
        return $this->featured_image ? Storage::url($this->featured_image) : null;
    }

    public function deleteFeaturedImage()
    {
        if ($this->featured_image && Storage::exists($this->featured_image)) {
            Storage::delete($this->featured_image);
        }
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($post) {
            $post->deleteFeaturedImage();
        });
    }
}
