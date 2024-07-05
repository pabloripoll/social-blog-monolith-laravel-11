<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class AdminUserModel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'ip_address',
        'in_standby',
        'is_opened',
        'is_expired',
        'expires_at',
        'token',
        'user_agent'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [];
    }

    /**
     * The table associated with the model.
     */
    protected $table = 'admins_sessions';

    public function table(): string
    {
        return $this->table;
    }
}
