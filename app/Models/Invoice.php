<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id',
        'itinerary_id',
        'proposal_id',
        'number',
        'status',
        'issue_date',
        'due_date',
        'subtotal',
        'taxes',
        'total',
        'balance_due',
        'currency',
        'metadata',
    ];

    protected $casts = [
        'issue_date' => 'date',
        'due_date' => 'date',
        'subtotal' => 'decimal:2',
        'taxes' => 'decimal:2',
        'total' => 'decimal:2',
        'balance_due' => 'decimal:2',
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

    public function proposal(): BelongsTo
    {
        return $this->belongsTo(Proposal::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
