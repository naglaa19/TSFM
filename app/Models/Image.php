<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table='image';
    protected $fillable=['name','image','notes','date','location','type','cat_id','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

















// select(name,)


    public function gallery(){
        return $this ->belongsTo('App\Models\Gallery','id');     #(,'primary key')

    }
    public function type(){
        return $this ->belongsTo('App\Models\Type','id');     #(,'primary key')

    }




}
