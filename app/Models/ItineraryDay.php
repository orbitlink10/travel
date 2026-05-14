<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItineraryDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'itinerary_id',
        'day_number',
        'title',
        'description',
        'date',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    /**
     * Get the itinerary that owns this day
     */
    public function itinerary(): BelongsTo
    {
        return $this->belongsTo(Itinerary::class);
    }

    /**
     * Get all items for this day
     */
    public function items(): HasMany
    {
        return $this->hasMany(ItineraryItem::class)->orderBy('time_start');
    }
}
