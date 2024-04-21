<?php

namespace App\Http\Controllers\Staff\AgencyManager;
use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Http\Request;

class AgencyManagerManageRentalsController extends Controller
{
    public function showAll(){
        $myOffers = Offer::where("agencyId", "=", auth()->user()->id)->get("id");
        $rentals = Rental::whereIn('offerId', $myOffers->pluck('id'))->get();
        return view('Staff.AgencyManager.rental.index', ["rentals"=>$rentals]);
    }

    public function approve($id){
        Rental::where('id', $id)->update([
            'status'=>'1',
        ]);
        return redirect()->route('AgencyManager.rental.showAll');
    }

    public function decline($id){
        Rental::where('id', $id)->update([
            'status'=>'2',
        ]);
        return redirect()->route('AgencyManager.rental.showAll');
    }
}
