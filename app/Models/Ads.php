<?php

namespace App\Models;

use System\Database\ORM\Model;

class Ads extends Model
{


    protected string $table = 'ads';

    protected array $fillable = ['title'];

    protected array $casts = [];

}