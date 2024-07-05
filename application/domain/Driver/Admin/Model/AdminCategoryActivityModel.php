<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class AdminCategoryActivityModel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
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
    protected $table = 'admin_categories_activity';

    public function table(): string
    {
        return $this->table;
    }

}
