<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, CategoryPost::TABLE_NAME)
            ->withTimestamps();
    }
}
