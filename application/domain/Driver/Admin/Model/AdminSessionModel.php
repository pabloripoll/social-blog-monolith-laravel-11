<?php

namespace Domain\Driver\Admin\Model;

use Illuminate\Database\Eloquent\Model;

class AdminSessionModel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'in_standby',
        'is_opened',
        'is_expired',
        'expires_at',
        'stopped_at',
        'reused',
        'ip_address',
        'token',
        'user_agent'
    ];

    public function assignable(): array
    {
        return $this->fillable;
    }

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
