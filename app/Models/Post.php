<?php

namespace App\Models;

use System\Database\ORM\Model;

class Post extends Model
{

    protected string $table = 'posts';

    protected array $fillable = ['title','body','cat_id'];

    protected array $casts = [];


    public function category()
    {
        return $this->belongsTo('App\Models\Category','cat_id','id');
    }
}