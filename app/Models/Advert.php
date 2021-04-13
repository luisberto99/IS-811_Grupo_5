<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

    //Relacion de uno a muchos

    public function user(){
        return $this->belongsTo(User::class);
        
    }

    public function category(){
        return $this->belongsTo(Category::class);
        
    }

    public function advertStatus(){
        return $this->belongsTo(AdvertStatus::class);
        
    }

    public function township(){
        return $this->belongsTo(Township::class);
        
    }

    //Relacion de uno a uno

    public function product(){
        return $this->hasOne(Product::class);
    }

    public function photo(){
        return $this->hasOne(Photo::class);
    }
}
