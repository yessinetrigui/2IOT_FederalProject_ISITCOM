<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $table = 'offers';

    protected $fillable = ['agencyId', 'carId', 'price', 'startDate', 'endDate'];

    public function agency()
    {
        return $this->belongsTo('App\Agency');
    }

    public function car()
    {
        return $this->belongsTo('App\Car');
    }

    public function rentals()
    {
        return $this->hasMany('App\Rental');
    }
}
