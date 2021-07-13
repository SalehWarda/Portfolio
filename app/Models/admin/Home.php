<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = "homes";

    protected $fillable = [

        'name', 'jobs','photo','created_at','updated_at'
    ];

    public function scopeSelection($query){

        return $query ->select('id','name','jobs',  'photo');
    }


    public function getPhotoAttribute($val){

        return ($val !== null) ? asset('/images/home/' . $val) : "";
    }
}
