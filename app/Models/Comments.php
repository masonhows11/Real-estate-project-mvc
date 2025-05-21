<?php

namespace App\Models;

use System\Database\ORM\Model;

class Comments extends Model
{
    protected string $table = 'comments';

    protected array $fillable = [
        'title',
        'comment',
        'user_id',
        'post_id',
        'parent_id',
        'status',
        'approved'
    ];
}