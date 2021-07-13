<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $table = 'experiences';

    protected $fillable = [

        'name_of_experience','experience_period','experience_place','task1','task2','task3','task4','created_at','updated_at'

    ];

    public function scopeSelection($query){


        return $query ->select('id','name_of_experience','experience_period','experience_place','task1','task2','task3','task4','created_at' );

    }
}
