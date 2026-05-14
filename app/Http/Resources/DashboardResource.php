<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DashboardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        return [
            'agency' => $this['agency'] ?? null,
            'clients_count' => $this['clients_count'] ?? 0,
            'itineraries_count' => $this['itineraries_count'] ?? 0,
            'active_itineraries_count' => $this['active_itineraries_count'] ?? 0,
            'draft_itineraries_count' => $this['draft_itineraries_count'] ?? 0,
            'proposals_count' => $this['proposals_count'] ?? 0,
            'total_invoice_value' => $this['total_invoice_value'] ?? 0,
            'outstanding_balance' => $this['outstanding_balance'] ?? 0,
            'products_count' => $this['products_count'] ?? 0,
        ];
    }
}
