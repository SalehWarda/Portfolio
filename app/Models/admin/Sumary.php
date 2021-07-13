<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sumary extends Model
{
    use HasFactory;

    protected $table = 'sumaries';

    protected $fillable = [

        'name','t_a_y_s','address','phone','email','created_at','updated_at'
    ];

     public function scopeSelection($query){

        return $query->select('id','name','t_a_y_s','address','phone','email' );

     }
}
