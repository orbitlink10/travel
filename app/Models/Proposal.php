<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proposal extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id',
        'itinerary_id',
        'title',
        'status',
        'proposal_date',
        'expires_at',
        'subtotal',
        'taxes',
        'total',
        'notes',
        'metadata',
    ];

    protected $casts = [
        'proposal_date' => 'date',
        'expires_at' => 'date',
        'subtotal' => 'decimal:2',
        'taxes' => 'decimal:2',
        'total' => 'decimal:2',
        'metadata' => 'json',
    ];

    public function agency(): BelongsTo
    {
        return $this->belongsTo(Agency::class);
    }

    public function itinerary(): BelongsTo
    {
        return $this->belongsTo(Itinerary::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(ProposalItem::class);
    }
}
