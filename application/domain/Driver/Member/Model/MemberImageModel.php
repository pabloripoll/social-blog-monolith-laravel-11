<?php

namespace Domain\Driver\Member\Model;

use Illuminate\Database\Eloquent\Model;

class MemberImageModel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'is_profile',
        'is_background',
        'is_selected',
        'storage_id',
        'file_name',
        'title',
        'extension',
        'position'
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
    protected $table = 'members_images';

    public function table(): string
    {
        return $this->table;
    }
}