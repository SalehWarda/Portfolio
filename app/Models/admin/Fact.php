<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
    use HasFactory;

    protected $table = 'facts';

    protected $fillable = [

        'facts','clients','projects','h_o_s','y_o_e','created_at','updated_at'

    ];

    public function scopeSelection($query){


        return $query ->select('id','facts','clients','projects','h_o_s','y_o_e'

    );

    }
}
