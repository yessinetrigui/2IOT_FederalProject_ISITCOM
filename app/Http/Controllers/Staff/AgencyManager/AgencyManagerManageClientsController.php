<?php

namespace App\Http\Controllers\Staff\AgencyManager;
use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Http\Request;

class AgencyManagerManageClientsController extends Controller
{
    public function showAll(){
        $myOffers = Offer::where("agencyId", "=", auth()->user()->id)->get("id");
        $ids = Rental::whereIn('offerId', $myOffers->pluck('id'))->get("clientId");
        $Users = User::whereIn('id', $ids->pluck('clientId'))->get();
        return view('Staff.AgencyManager.Clients.index', ["Users"=>$Users]);
    }
}
