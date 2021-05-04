<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    //relacion de muchos a uno

    public function advert(){
        return $this->hasMany(Advert::class);
    }

    public function subcription(){
        return $this->hasMany(Subscription::class);
    }
}
