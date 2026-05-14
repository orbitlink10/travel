<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Itinerary extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id',
        'user_id',
        'client_id',
        'share_token',
        'title',
        'description',
        'start_date',
        'end_date',
        'status',
        'total_price',
        'notes',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'total_price' => 'decimal:2',
    ];

    /**
     * Get the user that owns this itinerary
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the client associated with this itinerary
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class)->withDefault();
    }

    /**
     * Get the agency that owns this itinerary.
     */
    public function agency(): BelongsTo
    {
        return $this->belongsTo(Agency::class);
    }

    /**
     * Get all days for this itinerary
     */
    public function days(): HasMany
    {
        return $this->hasMany(ItineraryDay::class)->orderBy('day_number');
    }

    /**
     * Get all items for this itinerary (through days)
     */
    public function items(): HasMany
    {
        return $this->hasManyThrough(ItineraryItem::class, ItineraryDay::class);
    }

    /**
     * Boot the model
     */
    protected static function boot()
    {
        parent::boot();

        // Auto-generate share token when creating
        static::creating(function ($model) {
            if (empty($model->share_token)) {
                $model->share_token = Str::uuid();
            }
        });
    }

    /**
     * Calculate total price from items
     */
    public function calculateTotalPrice(): void
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += ($item->price ?? 0) * $item->quantity;
        }
        $this->update(['total_price' => $total]);
    }
}
