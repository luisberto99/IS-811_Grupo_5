<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryExpiration extends Model
{
    use HasFactory;
    protected $table = 'categories_expiration';
    protected $fillable = [
        'category_id', 'available_days'
    ];
}
