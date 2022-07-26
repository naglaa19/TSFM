<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table="type";
    protected $fillable=['name','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];





    public function image_type(){
        return $this->hasMany('App\Models\image','type','id'); //many relashion  (forenkey ,primary key)
    }
}
