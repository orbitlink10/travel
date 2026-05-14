<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id',
        'user_id',
        'name',
        'email',
        'phone',
        'preferences',
    ];

    protected $casts = [
        'preferences' => 'json',
    ];

    /**
     * Get the user that owns this client
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the agency that owns this client.
     */
    public function agency(): BelongsTo
    {
        return $this->belongsTo(Agency::class);
    }

    /**
     * Get all itineraries for this client
     */
    public function itineraries(): HasMany
    {
        return $this->hasMany(Itinerary::class);
    }

    /**
     * Get uploaded documents for the client.
     */
    public function documents(): HasMany
    {
        return $this->hasMany(ClientDocument::class);
    }
}
