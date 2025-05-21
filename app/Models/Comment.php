<?php

namespace App\Models;

use System\Database\ORM\Model;

class Comment extends Model
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




    public function user()
    {
        return $this->hasOne('App\Models\Comment','user_id','id');
    }


    public function post()
    {
        return $this->belongsTo('App\Models\Post','post_id','id');
    }
}