<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role,
            'agency' => $this->when(
                $this->relationLoaded('agency') && $this->agency,
                fn () => [
                'id' => $this->agency->id,
                'name' => $this->agency->name,
                'slug' => $this->agency->slug,
                'subscription_plan' => $this->agency->subscription_plan,
                'branding' => $this->agency->branding,
                'settings' => $this->agency->settings,
                ]
            ),
            'created_at' => $this->created_at?->toIso8601String(),
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }
}
