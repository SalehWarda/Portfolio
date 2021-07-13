<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $table = 'admins';

    protected $fillable= [

        'name','email','photo','password','created_at','updated_at'
    ];

    protected $hiddin = [

        'password',
        'remember_token',
    ];



    public function scopeSelection($query){


        return $query ->select('id','name');

    }

    public function getPhotoAttribute($val){

        return ($val !== null) ? asset('/images/profile/' . $val) : "";
    }
}
