<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $table = 'contact_us';

    protected $fillable = [

        'name','email','subject','message','created_at','updated_at'

    ];

    public function scopeSelection($query){


        return $query ->select('id','name','email','subject','message','created_at'

    );

    }
}
