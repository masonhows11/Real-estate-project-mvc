<?php

namespace App\Models;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;
class Post extends Model
{

    use HasSoftDelete;

    protected string $table = 'posts';

    protected array $fillable = ['title','body','user_id','cat_id','image','published_at','status'];
    protected $deletedAt = 'deleted_at';
    protected array $casts = ['image' => 'array'];


    public function category()
    {
        return $this->belongsTo('App\Models\Category','cat_id','id');
    }


    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}