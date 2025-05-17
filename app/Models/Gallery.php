<?php
namespace App\Models;


use System\Database\ORM\Model;

class Gallery extends Model{


    protected string $table = 'galleries';
    protected array $fillable = ['image','advertise_id'];

}