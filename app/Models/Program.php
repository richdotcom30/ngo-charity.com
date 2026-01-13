<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Program extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'category',
        'status',
        'start_date',
        'end_date',
        'target_amount',
        'raised_amount',
        'location',
        'coordinator_name',
        'coordinator_email',
        'impact_metrics',
        'images',
        'objectives',
        'challenges',
        'success_stories',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'target_amount' => 'decimal:2',
        'raised_amount' => 'decimal:2',
        'impact_metrics' => 'array',
        'images' => 'array',
    ];

    public function getProgressPercentageAttribute()
    {
        if ($this->target_amount > 0) {
            return min(100, round(($this->raised_amount / $this->target_amount) * 100, 1));
        }
        return 0;
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function getImagesUrlsAttribute()
    {
        if (!$this->images) {
            return [];
        }

        return array_map(function ($image) {
            return Storage::url($image);
        }, $this->images);
    }

    public function addImage($file)
    {
        $path = $file->store('programs', 'public');

        $images = $this->images ?? [];
        $images[] = $path;

        $this->update(['images' => $images]);

        return $path;
    }

    public function removeImage($imagePath)
    {
        if (Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }

        $images = $this->images ?? [];
        $images = array_filter($images, function ($image) use ($imagePath) {
            return $image !== $imagePath;
        });

        $this->update(['images' => array_values($images)]);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($program) {
            if ($program->images) {
                foreach ($program->images as $image) {
                    if (Storage::disk('public')->exists($image)) {
                        Storage::disk('public')->delete($image);
                    }
                }
            }
        });
    }
}
