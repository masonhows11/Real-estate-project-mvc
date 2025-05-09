<?php

namespace App\Models;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;
class Ads extends Model
{

    use HasSoftDelete;

    protected string $table = 'ads';

    protected array $fillable = ['title','description',
    'address','amount','image','floor','year','storeroom',
    'balcony','area','room','toilet','parking','tag','status','user_id','cat_id',
    'sell_status','type','view'];

    protected $deletedAt = 'deleted_at';

    protected array $casts = [];


    public function galleries()
    {
       
        return $this->hasMany('\App\Models\Gallery','advertise_id','id');

    }

}