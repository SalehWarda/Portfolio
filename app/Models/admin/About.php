<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';

    protected $fillable = [

        'name','birthday','age','nationality','address','degree','phone','email','spoken','freelance','photo','personalInfo','field_or_specialty','about_the_specialty'

    ];

    public function scopeSelection($query){


        return $query ->select('id','name','birthday','age','nationality','address','degree','phone','email','spoken','freelance','photo','personalInfo','field_or_specialty','about_the_specialty'
    );

    }


    public function getPhotoAttribute($val){

        return ($val !== null) ? asset('/images/about/' . $val) : "";
    }
}
