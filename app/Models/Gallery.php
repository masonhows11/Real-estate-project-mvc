<?php
namespace App\Models;


use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;
class Gallery extends Model{

    use HasSoftDelete;
    protected $deletedAt = 'deleted_at';
    protected string $table = 'galleries';
    protected array $fillable = ['image','advertise_id'];


}