<?php

namespace App\Models;


use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;


class Category extends Model
{

    use HasSoftDelete;

    protected string $table = 'categories';

    protected array $fillable = ['name','parent_id'];
    protected ?string $deletedAt = 'deleted_at';
    // protected array $casts = [];



    public function posts()
    {
        return
            $this->hasMany('App\Models\Post','cat_id', 'id');
    }

}