<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'company_name',
        'thumbnail',
        'description',
    ];

    public function getuser(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
