<?php

namespace App\Policies;

use App\Models\Itinerary;
use App\Models\User;

class ItineraryPolicy
{
    /**
     * Determine if the user can view the itinerary
     */
    public function view(User $user, Itinerary $itinerary): bool
    {
        return $user->id === $itinerary->user_id;
    }

    /**
     * Determine if the user can update the itinerary
     */
    public function update(User $user, Itinerary $itinerary): bool
    {
        return $user->id === $itinerary->user_id;
    }

    /**
     * Determine if the user can delete the itinerary
     */
    public function delete(User $user, Itinerary $itinerary): bool
    {
        return $user->id === $itinerary->user_id;
    }
}
