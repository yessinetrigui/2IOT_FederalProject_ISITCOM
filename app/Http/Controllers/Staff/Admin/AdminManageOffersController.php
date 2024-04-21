<?php

namespace App\Http\Controllers\Staff\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Offers;
use Illuminate\Http\Request;

class AdminManageOffersController extends Controller
{
    public function showAll(){
        $Offers = Offer::all();
        return view('Staff.Admin.Offers.index', ["Offres"=>$Offers]);
    }

}
