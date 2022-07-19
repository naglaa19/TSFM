<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table='gallery';
    protected $fillable=['title','date','alboum_cover','description','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

}
