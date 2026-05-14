<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id',
        'type',
        'name',
        'description',
        'location',
        'price',
        'currency',
        'image_url',
        'media_urls',
        'amenities',
        'website',
        'email',
        'phone',
        'rating',
        'reviews_count',
        'metadata',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'rating' => 'decimal:2',
        'media_urls' => 'json',
        'metadata' => 'json',
        'is_active' => 'boolean',
    ];

    /**
     * Scope to get only active products
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope to get products by type
     */
    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Scope to get products by location
     */
    public function scopeByLocation($query, $location)
    {
        return $query->where('location', 'like', "%{$location}%");
    }

    /**
     * Get the agency that owns this content asset.
     */
    public function agency(): BelongsTo
    {
        return $this->belongsTo(Agency::class);
    }

    /**
     * Get the media assets for this product.
     */
    public function media(): HasMany
    {
        return $this->hasMany(ProductMedia::class)->orderBy('sort_order');
    }

    /**
     * Get the average rating
     */
    public function getAverageRatingAttribute(): ?string
    {
        return $this->rating ? round($this->rating, 1) : null;
    }
}
