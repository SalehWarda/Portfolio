<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $fillable = [

        'name' , 'link' , 'icon' ,'created_at' , 'updated_at'
    ];

    public function scopeSelection($query){

        return $query->select('id','name','link','icon','created_at');
    }
}
