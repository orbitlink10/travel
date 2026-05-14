<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DashboardResource;
use App\Services\DashboardService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(private DashboardService $dashboardService) {}

    /**
     * Return dashboard overview statistics
     */
    public function index(): JsonResponse
    {
        $overview = $this->dashboardService->getOverview(auth()->user());

        return response()->json([
            'success' => true,
            'data' => new DashboardResource($overview),
        ]);
    }

    /**
     * Store agency onboarding details for the authenticated user's workspace.
     */
    public function updateAgency(Request $request): JsonResponse
    {
        $data = $request->validate([
            'company_name' => 'required|string|max:255',
            'business_location' => 'required|string|max:255',
            'phone_number' => 'required|string|max:50',
            'website' => 'required|string|max:255',
            'language_preference' => 'nullable|string|max:50',
            'account_type' => 'nullable|string|max:100',
        ]);

        $user = auth()->user()->load('agency');
        $agency = $user->agency;

        if (!$agency) {
            return response()->json([
                'success' => false,
                'message' => 'No agency workspace is attached to this user.',
            ], 422);
        }

        $settings = array_merge($agency->settings ?? [], [
            'business_location' => $data['business_location'],
            'phone_number' => $data['phone_number'],
            'website' => $data['website'],
            'language_preference' => $data['language_preference'] ?? 'English',
            'account_type' => $data['account_type'] ?? null,
            'onboarding_completed_at' => now()->toIso8601String(),
        ]);

        $agency->update([
            'name' => $data['company_name'],
            'settings' => $settings,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Agency setup saved successfully',
            'data' => [
                'agency' => $agency->fresh(),
            ],
        ]);
    }
}
