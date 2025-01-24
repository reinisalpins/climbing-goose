<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    public const TABLE_NAME = 'category_posts';

    protected $fillable = [
        'category_id',
        'post_id'
    ];
}
