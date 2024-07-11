<?php

namespace Domain\Driver\Admin\Model;

use Illuminate\Database\Eloquent\Model;

class AdminUserModel extends Model
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
        'username',
        'alias',
        'password',
        'created_by_user_id'
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
    protected $hidden = [
        'password'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    /**
     * The table associated with the model.
     */
    protected $table = 'admins_user';

    public function table(): string
    {
        return $this->table;
    }

}
