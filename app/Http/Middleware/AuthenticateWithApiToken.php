<?php

namespace App\Http\Middleware;

use App\Models\ApiToken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateWithApiToken
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthenticated',
            ], 401);
        }

        $apiToken = ApiToken::where('token', $token)->first();

        if (!$apiToken) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid token',
            ], 401);
        }

        // Check if token has expired
        if ($apiToken->expires_at && $apiToken->expires_at->isPast()) {
            $apiToken->delete();
            return response()->json([
                'success' => false,
                'message' => 'Token expired',
            ], 401);
        }

        // Update last used timestamp
        $apiToken->update(['last_used_at' => now()]);

        // Set authenticated user
        $user = $apiToken->tokenable;
        $request->setUserResolver(fn () => $user);
        auth()->setUser($user);

        return $next($request);
    }
}
