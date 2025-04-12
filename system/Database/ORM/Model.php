<?php

namespace System\Database\ORM;

use AllowDynamicProperties;
use System\Database\Traits\HasAttributes;
use System\Database\Traits\HasCrud;
use System\Database\Traits\HasSoftDelete;
use System\Database\Traits\HasRelation;
use System\Database\Traits\HasQueryBuilder;
use System\Database\Traits\HasMethodCaller;

#[AllowDynamicProperties]
abstract  class Model
{
    use HasMethodCaller,HasQueryBuilder,HasRelation,HasAttributes,HasCrud;

    protected string $table;
    protected array $fillable = [];

    protected array  $hidden = [];

    protected array $casts = [];

    protected  string $primaryKey =  'id';

    protected string $createdAt = 'created_at';
    protected string $updatedAt = 'updated_at';

    protected bool|null $deletedAt = null;

    protected array $collection = [];




}