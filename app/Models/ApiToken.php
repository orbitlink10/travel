<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class ApiToken extends Model
{
    use HasFactory;

    protected $table = 'personal_access_tokens';

    public $timestamps = false;

    protected $fillable = [
        'tokenable_type',
        'tokenable_id',
        'name',
        'token',
        'abilities',
        'last_used_at',
        'expires_at',
    ];

    protected $casts = [
        'abilities' => 'json',
        'last_used_at' => 'datetime',
        'expires_at' => 'datetime',
        'created_at' => 'datetime',
    ];

    /**
     * Get the tokenable model
     */
    public function tokenable()
    {
        return $this->morphTo();
    }

    /**
     * Create a new API token
     */
    public static function createToken(Model $user, string $name, array $abilities = ['*']): self
    {
        return self::create([
            'tokenable_type' => $user::class,
            'tokenable_id' => $user->id,
            'name' => $name,
            'token' => Str::random(80),
            'abilities' => $abilities,
            'created_at' => now(),
        ]);
    }
}
