<?php

namespace Domain\Driver\Member\Model;

use Illuminate\Database\Eloquent\Model;

class MemberTempTokenModel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'was_used',
        'expires_at',
        'token'
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
    protected $table = 'members_temp_tokens';

    public function table(): string
    {
        return $this->table;
    }
}
