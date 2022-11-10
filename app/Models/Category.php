<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_name',
        'thumbnail',
        
    ];
    public function getuser(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
