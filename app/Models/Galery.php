<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;
     protected $guarded = ['id'];

     public function getRouteKeyName()
    {
        return 'slug';
    }

    /* public function author(){
        return $this->belongsTo(User::class, 'user_id');
    } */
}
