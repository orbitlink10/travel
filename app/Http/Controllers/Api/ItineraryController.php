<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItineraryRequest;
use App\Http\Resources\ItineraryDayResource;
use App\Http\Resources\ItineraryItemResource;
use App\Http\Resources\ItineraryResource;
use App\Models\Itinerary;
use App\Models\ItineraryDay;
use App\Models\ItineraryItem;
use App\Services\ItineraryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ItineraryController extends Controller
{
    public function __construct(private ItineraryService $itineraryService) {}

    /**
     * Get all itineraries for authenticated user
     */
    public function index(): AnonymousResourceCollection
    {
        $itineraries = auth()->user()->itineraries()->with('days')->latest()->get();

        return ItineraryResource::collection($itineraries);
    }

    /**
     * Create a new itinerary
     */
    public function store(ItineraryRequest $request): JsonResponse
    {
        $itinerary = $this->itineraryService->create(auth()->user(), $request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Itinerary created successfully',
            'data' => new ItineraryResource($itinerary),
        ], 201);
    }

    /**
     * Get a specific itinerary
     */
    public function show(Itinerary $itinerary): JsonResponse
    {
        $this->authorize('view', $itinerary);

        $itinerary->load('days.items');

        return response()->json([
            'success' => true,
            'data' => new ItineraryResource($itinerary),
            'days' => ItineraryDayResource::collection($itinerary->days),
        ]);
    }

    /**
     * Update an itinerary
     */
    public function update(ItineraryRequest $request, Itinerary $itinerary): JsonResponse
    {
        $this->authorize('update', $itinerary);

        $updated = $this->itineraryService->update($itinerary, $request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Itinerary updated successfully',
            'data' => new ItineraryResource($updated),
        ]);
    }

    /**
     * Delete an itinerary
     */
    public function destroy(Itinerary $itinerary): JsonResponse
    {
        $this->authorize('delete', $itinerary);

        $this->itineraryService->delete($itinerary);

        return response()->json([
            'success' => true,
            'message' => 'Itinerary deleted successfully',
        ]);
    }

    /**
     * Get all days for an itinerary
     */
    public function getDays(Itinerary $itinerary): AnonymousResourceCollection
    {
        $this->authorize('view', $itinerary);

        return ItineraryDayResource::collection($itinerary->days);
    }

    /**
     * Add a day to itinerary
     */
    public function addDay(Itinerary $itinerary): JsonResponse
    {
        $this->authorize('update', $itinerary);

        $data = request()->validate([
            'day_number' => 'required|integer',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'date' => 'nullable|date',
        ]);

        $day = $this->itineraryService->addDay($itinerary, $data);

        return response()->json([
            'success' => true,
            'message' => 'Day added successfully',
            'data' => new ItineraryDayResource($day),
        ], 201);
    }

    /**
     * Add item to a day
     */
    public function addItem(ItineraryDay $day): JsonResponse
    {
        $this->authorize('update', $day->itinerary);

        $data = request()->validate([
            'type' => 'required|string',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string',
            'time_start' => 'nullable|time',
            'time_end' => 'nullable|time',
            'price' => 'nullable|numeric',
            'quantity' => 'nullable|integer|min:1',
            'notes' => 'nullable|string',
            'metadata' => 'nullable|array',
        ]);

        $item = $this->itineraryService->addItem($day, $data);

        return response()->json([
            'success' => true,
            'message' => 'Item added successfully',
            'data' => new ItineraryItemResource($item),
        ], 201);
    }

    /**
     * Update an item
     */
    public function updateItem(ItineraryItem $item): JsonResponse
    {
        $this->authorize('update', $item->day->itinerary);

        $data = request()->validate([
            'type' => 'sometimes|string',
            'title' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string',
            'time_start' => 'nullable|time',
            'time_end' => 'nullable|time',
            'price' => 'nullable|numeric',
            'quantity' => 'nullable|integer|min:1',
            'notes' => 'nullable|string',
            'metadata' => 'nullable|array',
        ]);

        $item->update($data);
        $item->day->itinerary->calculateTotalPrice();

        return response()->json([
            'success' => true,
            'message' => 'Item updated successfully',
            'data' => new ItineraryItemResource($item),
        ]);
    }

    /**
     * Delete an item
     */
    public function deleteItem(ItineraryItem $item): JsonResponse
    {
        $this->authorize('delete', $item->day->itinerary);

        $item->delete();
        $item->day->itinerary->calculateTotalPrice();

        return response()->json([
            'success' => true,
            'message' => 'Item deleted successfully',
        ]);
    }

    /**
     * Generate share link
     */
    public function shareLink(Itinerary $itinerary): JsonResponse
    {
        $this->authorize('view', $itinerary);

        return response()->json([
            'success' => true,
            'share_link' => $this->itineraryService->getShareLink($itinerary),
            'share_token' => $itinerary->share_token,
        ]);
    }

    /**
     * Regenerate share token
     */
    public function regenerateShareToken(Itinerary $itinerary): JsonResponse
    {
        $this->authorize('update', $itinerary);

        $token = $this->itineraryService->regenerateShareToken($itinerary);

        return response()->json([
            'success' => true,
            'message' => 'Share token regenerated',
            'share_token' => $token,
        ]);
    }
}
