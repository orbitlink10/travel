<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItineraryItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'day_id' => $this->itinerary_day_id,
            'type' => $this->type,
            'title' => $this->title,
            'description' => $this->description,
            'location' => $this->location,
            'time_start' => $this->time_start,
            'time_end' => $this->time_end,
            'price' => $this->price !== null ? (float) $this->price : null,
            'quantity' => $this->quantity,
            'total_price' => $this->total_price !== null ? (float) $this->total_price : null,
            'notes' => $this->notes,
            'metadata' => $this->metadata,
            'created_at' => $this->created_at?->toIso8601String(),
        ];
    }
}
