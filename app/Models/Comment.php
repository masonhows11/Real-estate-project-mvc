<?php

namespace App\Models;

use System\Database\ORM\Model;

class Comment extends Model
{
    protected string $table = 'comments';

    protected array $fillable = [
        'comment',
        'user_id',
        'post_id',
        'parent_id',
        'status',
        'approved'
    ];



    public function child()
    {
        return $this->hasMany('App\Models\Comment','parent_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }


    public function post()
    {
        return $this->belongsTo('App\Models\Post','post_id','id');
    }
}