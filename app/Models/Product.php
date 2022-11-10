<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; protected $fillable = [
        'user_id',
        'product_name',
        'expire_date',
        'price',
        'old_price',
        'company',
        'category',
        'subcategory',
        'description',
        'thumbnail',
        
    ];
}
