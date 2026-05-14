<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PricingItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'itinerary_item_id',
        'cost',
        'markup_percent',
        'selling_price',
        'commission',
        'metadata',
    ];

    protected $casts = [
        'cost' => 'decimal:2',
        'markup_percent' => 'decimal:2',
        'selling_price' => 'decimal:2',
        'commission' => 'decimal:2',
        'metadata' => 'json',
    ];

    public function itineraryItem(): BelongsTo
    {
        return $this->belongsTo(ItineraryItem::class);
    }
}
