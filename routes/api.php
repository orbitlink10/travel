<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\ItineraryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Middleware\AuthenticateWithApiToken;
use Illuminate\Support\Facades\Route;

// Public routes
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

    // Public product routes (no auth required)
    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index']);
        Route::get('type/{type}', [ProductController::class, 'byType']);
        Route::get('location/{location}', [ProductController::class, 'byLocation']);
        Route::get('/{product}', [ProductController::class, 'show']);
    });

    // Public share routes (no auth required)
    Route::get('share/{token}', function ($token) {
        $itinerary = \App\Models\Itinerary::where('share_token', $token)->firstOrFail();
        $itinerary->load('days.items', 'client');
        
        return response()->json([
            'success' => true,
            'data' => $itinerary,
        ]);
    })->name('share.itinerary');

    // Protected routes (require authentication with custom middleware)
    Route::middleware(AuthenticateWithApiToken::class)->group(function () {
        // Auth routes
        Route::post('logout', [AuthController::class, 'logout']);
        Route::get('me', [AuthController::class, 'me']);

        // Client routes
        Route::apiResource('clients', ClientController::class);

        // Itinerary routes
        Route::apiResource('itineraries', ItineraryController::class);
        Route::post('itineraries/{itinerary}/days', [ItineraryController::class, 'addDay']);
        Route::get('itineraries/{itinerary}/days', [ItineraryController::class, 'getDays']);
        Route::post('days/{day}/items', [ItineraryController::class, 'addItem']);
        Route::put('items/{item}', [ItineraryController::class, 'updateItem']);
        Route::delete('items/{item}', [ItineraryController::class, 'deleteItem']);
        Route::get('itineraries/{itinerary}/share-link', [ItineraryController::class, 'shareLink']);
        Route::post('itineraries/{itinerary}/regenerate-token', [ItineraryController::class, 'regenerateShareToken']);
        Route::get('dashboard', [DashboardController::class, 'index']);
        Route::put('agency', [DashboardController::class, 'updateAgency']);
    });
