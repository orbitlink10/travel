<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClientDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'agency_id',
        'title',
        'file_path',
        'type',
        'metadata',
        'uploaded_at',
    ];

    protected $casts = [
        'metadata' => 'json',
        'uploaded_at' => 'datetime',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function agency(): BelongsTo
    {
        return $this->belongsTo(Agency::class);
    }
}
