<?php

namespace App\Models;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Slider extends Model
{
    use HasSoftDelete;

    protected string $table = 'slider';

    protected  $deletedAt = 'deleted_at';

    protected array $fillable = [
        'title',
        'url',
        'address',
        'amount',
        'image',
        'body'
    ];
}