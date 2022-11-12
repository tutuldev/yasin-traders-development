<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'subcategory_name',
        'thumbnail',

    ];
    public function getuser(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
