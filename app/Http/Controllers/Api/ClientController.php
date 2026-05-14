<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use App\Services\ClientService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ClientController extends Controller
{
    public function __construct(private ClientService $clientService) {}

    /**
     * Get all clients for authenticated user
     */
    public function index(): AnonymousResourceCollection
    {
        $clients = auth()->user()->clients()->latest()->get();

        return ClientResource::collection($clients);
    }

    /**
     * Create a new client
     */
    public function store(ClientRequest $request): JsonResponse
    {
        $client = $this->clientService->create(auth()->user(), $request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Client created successfully',
            'data' => new ClientResource($client),
        ], 201);
    }

    /**
     * Get a specific client
     */
    public function show(Client $client): JsonResponse
    {
        $this->authorize('view', $client);

        return response()->json([
            'success' => true,
            'data' => new ClientResource($client),
        ]);
    }

    /**
     * Update a client
     */
    public function update(ClientRequest $request, Client $client): JsonResponse
    {
        $this->authorize('update', $client);

        $updated = $this->clientService->update($client, $request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Client updated successfully',
            'data' => new ClientResource($updated),
        ]);
    }

    /**
     * Delete a client
     */
    public function destroy(Client $client): JsonResponse
    {
        $this->authorize('delete', $client);

        $this->clientService->delete($client);

        return response()->json([
            'success' => true,
            'message' => 'Client deleted successfully',
        ]);
    }
}
