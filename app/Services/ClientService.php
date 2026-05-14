<?php

namespace App\Services;

use App\Models\Client;
use App\Models\User;

class ClientService
{
    /**
     * Create a new client
     */
    public function create(User $user, array $data): Client
    {
        return Client::create([
            'user_id' => $user->id,
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'preferences' => $data['preferences'] ?? null,
        ]);
    }

    /**
     * Update a client
     */
    public function update(Client $client, array $data): Client
    {
        $client->update($data);
        return $client;
    }

    /**
     * Delete a client
     */
    public function delete(Client $client): bool
    {
        return $client->delete();
    }

    /**
     * Get all clients for user
     */
    public function getAllForUser(User $user)
    {
        return $user->clients()->get();
    }
}
