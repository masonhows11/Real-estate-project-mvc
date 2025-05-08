<?php

namespace App\Models;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;
class Ads extends Model
{

    use HasSoftDelete;

    protected string $table = 'ads';

    protected array $fillable = ['title'];

    protected array $casts = [];

}