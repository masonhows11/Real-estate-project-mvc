<?php

namespace App\Models;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;
class User extends Model
{

    use HasSoftDelete;

    protected string $table = 'users';

    protected array $fillable = ['name','email','first_name','last_name','avatar','status',
        'is_active','password','verify_token','user_type','remember_token','remember_token_expire'];

    protected array $casts = [];
    protected $deletedAt = 'deleted_at';

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','user_role','id','user_id','role_id','id');
    }
}
