<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;


    protected $table = 'education';
    protected $fillable = [


        'name_of_specialty','degree_of_specialty',  'study_period',  'place_of_study','about_of_specialty','created_at','updated_at'
    ];

    public function scopeSelection($query){


        return $query ->select('id','name_of_specialty','degree_of_specialty',  'study_period',  'place_of_study','about_of_specialty' ,'created_at');

    }
}
