<?php

namespace App\Models;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Slider extends Model
{
    use HasSoftDelete;

    protected string $table = "slides";

    protected array $fillable = [
        'title',
        'url',
        'address',
        'amount',
        'image',
        'body'
    ];
}