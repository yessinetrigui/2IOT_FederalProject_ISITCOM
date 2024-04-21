<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'car';

    protected $fillable = ['picUrl1', 'picUrl2', 'picUrl3', 'model', 'description', 'capacity', 'brand', 'bodyStyle', 'colors', 'agencyId'];

    public function agency()
    {
        return $this->belongsTo('App\Agency');
    }

    public function rentals()
    {
        return $this->hasMany('App\Rental');
    }

    public function offers()
    {
        return $this->hasMany('App\Offer');
    }
}
