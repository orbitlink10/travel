<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItineraryDayResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'itinerary_id' => $this->itinerary_id,
            'day_number' => $this->day_number,
            'title' => $this->title,
            'description' => $this->description,
            'date' => $this->date?->toIso8601String(),
            'items' => ItineraryItemResource::collection($this->whenLoaded('items')),
            'items_count' => $this->items_count ?? $this->items->count(),
            'created_at' => $this->created_at?->toIso8601String(),
        ];
    }
}
