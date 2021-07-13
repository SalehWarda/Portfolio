<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolios';

    protected $fillable = [

        'name','description','category_id','created_at','updated_at'
    ];

    public function scopeSelection($query){

        return $query->select('id','name','description','category_id','created_at');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\admin\PortfolioCategory', 'category_id', 'id');
    }

    public function images()
    {
        return $this->hasMany('App\Models\admin\PortfolioImage', 'portfolio_id', 'id');
    }


}
