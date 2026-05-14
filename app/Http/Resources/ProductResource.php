<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'name' => $this->name,
            'description' => $this->description,
            'location' => $this->location,
            'price' => $this->price !== null ? (float) $this->price : null,
            'currency' => $this->currency,
            'image_url' => $this->image_url,
            'media_urls' => $this->media_urls,
            'amenities' => $this->amenities,
            'website' => $this->website,
            'email' => $this->email,
            'phone' => $this->phone,
            'rating' => $this->rating !== null ? (float) $this->rating : null,
            'reviews_count' => $this->reviews_count,
            'metadata' => $this->metadata,
            'is_active' => $this->is_active,
            'created_at' => $this->created_at?->toIso8601String(),
        ];
    }
}
