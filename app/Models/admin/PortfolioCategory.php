<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    use HasFactory;

    protected $table = 'portfolio_categories';

    protected $fillable = [

        'name','created_at','updated_at',
    ];

    public function scopeSelection($query){

        return $query->select('id','name','created_at');
    }

    public function portfolio()
    {
        return $this->hasMany('App\Models\admin\portfolio', 'category_id', 'id');
    }
}
