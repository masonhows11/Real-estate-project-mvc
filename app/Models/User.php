<?php

namespace App\Models;

use System\Database\ORM\Model;

class User extends Model
{
    protected string $table = 'users';

    protected array $fillable = ['name','email','first_name','last_name'];

    protected array $casts = [];


    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','user_role','id','user_id','role_id','id');
    }
}
