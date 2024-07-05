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
        'pid',
        'is_active',
        'is_banned',
        'banned_id',
        'username',
        'alias',
        'password',
        'created_by_user_id'
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
    protected $table = 'admins_profile';

    public function table(): string
    {
        return $this->table;
    }
}
