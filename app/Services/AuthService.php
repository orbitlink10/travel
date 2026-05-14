<?php

namespace App\Services;

use App\Models\Agency;
use App\Models\ApiToken;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthService
{
    /**
     * Register a new user
     */
    public function register(array $data): User
    {
        $agencyName = $data['agency_name'] ?? $this->guessAgencyName($data['email']);
        $agency = Agency::create([
            'name' => $agencyName,
            'slug' => $this->uniqueAgencySlug($agencyName),
            'subscription_plan' => 'trial',
            'settings' => [
                'client_type' => $data['client_type'] ?? 'operator',
                'trial_started_at' => now()->toIso8601String(),
                'trial_days' => 14,
            ],
        ]);

        return User::create([
            'agency_id' => $agency->id,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'] ?? 'agency_owner',
        ]);
    }

    /**
     * Authenticate user and return token
     */
    public function login(array $credentials): ?string
    {
        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return null;
        }

        $token = ApiToken::createToken($user, 'api-token');
        
        return $token->token;
    }

    /**
     * Logout user
     */
    public function logout(User $user): bool
    {
        // Delete all API tokens for this user
        return ApiToken::where('tokenable_type', User::class)
            ->where('tokenable_id', $user->id)
            ->delete() > 0;
    }

    /**
     * Verify token and return user
     */
    public function verifyToken(string $token): ?User
    {
        $apiToken = ApiToken::where('token', $token)->first();

        if (!$apiToken) {
            return null;
        }

        // Check if token has expired
        if ($apiToken->expires_at && $apiToken->expires_at->isPast()) {
            $apiToken->delete();
            return null;
        }

        return $apiToken->tokenable;
    }

    private function guessAgencyName(string $email): string
    {
        $domain = Str::of($email)->after('@')->before('.');

        return Str::of($domain)->replace(['-', '_'], ' ')->title()->append(' Travel')->toString();
    }

    private function uniqueAgencySlug(string $name): string
    {
        $base = Str::slug($name) ?: 'agency';
        $slug = $base;
        $count = 2;

        while (Agency::where('slug', $slug)->exists()) {
            $slug = "{$base}-{$count}";
            $count++;
        }

        return $slug;
    }
}
