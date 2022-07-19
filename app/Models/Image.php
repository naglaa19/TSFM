<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table='image';
    protected $fillable=['images','notes','date','location','type','cat_id','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
}
