<?php

namespace App\Models;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Ads extends Model
{

    use HasSoftDelete;

    protected string $table = 'ads';

    protected array $fillable = [
        'title',
        'description',
        'address',
        'amount',
        'image',
        'floor',
        'year',
        'storeroom',
        'balcony',
        'area',
        'room',
        'toilet',
        'parking',
        'tag',
        'status',
        'user_id',
        'cat_id',
        'sell_status',
        'type',
        'view'
    ];

    protected $deletedAt = 'deleted_at';

    protected array $casts = [];


    public function galleries()
    {
        return $this->hasMany('\App\Models\Gallery', 'advertise_id', 'id');
    }


    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'cat_id', 'id');
    }

    public function sellStatus(): string
    {
        return ($this->sell_status == 0) ? 'اجاره' : 'خرید';
    }

    public function type(): ?string
    {
        return match ($this->type) {
            0 => 'اپارتمان',
            1 => 'ویلایی',
            2 => 'زمین',
            3 => 'سوله',
            default => null,
        };
    }
}
