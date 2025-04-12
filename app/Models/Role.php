<?php

namespace App\Models;

use System\Database\ORM\Model;

class Role extends Model
{
    protected string $table = 'roles';

    protected array $fillable = ['name'];

    protected array $casts = [];


    public function users()
    {
        return
            $this->belongsToMany('App\Models\User','user_role','id','role_id','user_id','id');
    }
}