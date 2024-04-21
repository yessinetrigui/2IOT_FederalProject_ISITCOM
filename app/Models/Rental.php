<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $table = 'rentals';

    protected $fillable = ['clientId', 'offerId', 'startDate', 'endDate'];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function offer()
    {
        return $this->belongsTo('App\Offer');
    }
}
