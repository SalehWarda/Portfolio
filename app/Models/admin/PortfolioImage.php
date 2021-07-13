<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    use HasFactory;

    protected  $table = 'portfolio_images';
    protected  $fillable = [

        'photo'
    ];

    public function portfolio()
    {
        return $this->belongsTo('App\Models\admin\Portfolio', 'portfolio_id', 'id');
    }

    public function getPhotoAttribute($val){

        return ($val !== null) ? asset('/images/portfolio/' . $val) : "";
    }
}
