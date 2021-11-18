<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $table = 'skills';

    protected $fillable = [

        'n_o_s','l_o_e','created_at','updated_at',
    ];

    public function scopeSelection($query){


        return $query->select('id','l_o_e','n_o_s','created_at');
    }
}
