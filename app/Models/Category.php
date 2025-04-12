<?php

namespace App\Models;


use System\Database\ORM\Model;


class Category extends Model
{

    protected string $table = 'categories';

    protected array $fillable = ['title'];

    protected array $casts = [];



    public function posts()
    {
        return
            $this->hasMany('App\Models\Post','cat_id', 'id');
    }

}