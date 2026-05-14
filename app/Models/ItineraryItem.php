<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ItineraryItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'itinerary_day_id',
        'product_id',
        'type',
        'title',
        'description',
        'location',
        'time_start',
        'time_end',
        'price',
        'quantity',
        'notes',
        'metadata',
    ];

    protected $casts = [
        'time_start' => 'datetime:H:i',
        'time_end' => 'datetime:H:i',
        'price' => 'decimal:2',
        'metadata' => 'json',
    ];

    /**
     * Get the itinerary day that owns this item
     */
    public function day(): BelongsTo
    {
        return $this->belongsTo(ItineraryDay::class, 'itinerary_day_id');
    }

    /**
     * Get the referenced product if the itinerary item is linked to the content library.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the pricing record for this itinerary item.
     */
    public function pricing(): HasOne
    {
        return $this->hasOne(PricingItem::class, 'itinerary_item_id');
    }

    /**
     * Get total price for this item (price * quantity)
     */
    public function getTotalPriceAttribute(): ?float
    {
        if ($this->price === null) {
            return null;
        }
        return $this->price * $this->quantity;
    }
}
