<?php

namespace App\Services;

use App\Models\Itinerary;
use App\Models\ItineraryDay;
use App\Models\ItineraryItem;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ItineraryService
{
    /**
     * Create a new itinerary
     */
    public function create(User $user, array $data): Itinerary
    {
        $itinerary = Itinerary::create([
            'user_id' => $user->id,
            'client_id' => $data['client_id'] ?? null,
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
            'status' => $data['status'] ?? 'draft',
            'notes' => $data['notes'] ?? null,
            'share_token' => Str::uuid(),
        ]);

        // Create days based on date range if requested
        if ($data['auto_create_days'] ?? false) {
            $this->createDaysFromDateRange($itinerary);
        }

        return $itinerary;
    }

    /**
     * Update an itinerary
     */
    public function update(Itinerary $itinerary, array $data): Itinerary
    {
        $itinerary->update($data);
        $itinerary->calculateTotalPrice();
        
        return $itinerary;
    }

    /**
     * Delete an itinerary
     */
    public function delete(Itinerary $itinerary): bool
    {
        return $itinerary->delete();
    }

    /**
     * Add a day to itinerary
     */
    public function addDay(Itinerary $itinerary, array $data): ItineraryDay
    {
        return ItineraryDay::create([
            'itinerary_id' => $itinerary->id,
            'day_number' => $data['day_number'],
            'title' => $data['title'] ?? null,
            'description' => $data['description'] ?? null,
            'date' => $data['date'] ?? null,
        ]);
    }

    /**
     * Add item to a day
     */
    public function addItem(ItineraryDay $day, array $data): ItineraryItem
    {
        $item = ItineraryItem::create([
            'itinerary_day_id' => $day->id,
            'type' => $data['type'],
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'location' => $data['location'] ?? null,
            'time_start' => $data['time_start'] ?? null,
            'time_end' => $data['time_end'] ?? null,
            'price' => $data['price'] ?? null,
            'quantity' => $data['quantity'] ?? 1,
            'notes' => $data['notes'] ?? null,
            'metadata' => $data['metadata'] ?? null,
        ]);

        // Update itinerary total price
        $day->itinerary->calculateTotalPrice();

        return $item;
    }

    /**
     * Auto-create days from date range
     */
    private function createDaysFromDateRange(Itinerary $itinerary): void
    {
        $start = Carbon::parse($itinerary->start_date);
        $end = Carbon::parse($itinerary->end_date);
        $dayCount = $start->diffInDays($end) + 1;

        for ($i = 1; $i <= $dayCount; $i++) {
            ItineraryDay::create([
                'itinerary_id' => $itinerary->id,
                'day_number' => $i,
                'date' => $start->copy()->addDays($i - 1),
            ]);
        }
    }

    /**
     * Generate public share link
     */
    public function getShareLink(Itinerary $itinerary): string
    {
        return route('share.itinerary', ['token' => $itinerary->share_token]);
    }

    /**
     * Regenerate share token
     */
    public function regenerateShareToken(Itinerary $itinerary): string
    {
        $itinerary->update(['share_token' => Str::uuid()]);
        return $itinerary->share_token;
    }
}
