<?php

namespace App\Http\Controllers\Staff\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offers;
use App\Models\OffersPricing;
use Illuminate\Http\Request;

class AdminManageHotelOffersController extends Controller
{
    public function showAll($idHotel){
        $Offers = OffersPricing::where("idHotel", $idHotel)->get();
        return view('Staff.Admin.hotel.Offers.prices.index', ["offers"=>$Offers, 'idHotel'=>$idHotel]);
    }

    public function showPerID($idHotel, $id){
        $offer = OffersPricing::findorFail($id);
        return view('Staff.Admin.hotel.Offers.prices.show', ["offer"=>$offer, 'idHotel'=>$idHotel]);
    }

    public function showAdd($idHotel){
        $OffersSyS  = Offers::all();
        return view('Staff.Admin.hotel.Offers.prices.create',['offre'=>null, 'idHotel'=>$idHotel, 'OffersSyS'=>$OffersSyS]);
    }

    public function doAdd(Request $req, $idHotel){
        /*$req->validate([
            'idTypeRoom' =>  ['required', 'numeric'],
            'price' => ['required', 'floatval'],
            'startDate' =>  ['required', 'date'],
            'endDate' =>  ['required', 'date'],
        ]);*/

        OffersPricing::create([
            'idOffre'=>$req['idOffre'],
            'price'=>$req['price'],
            'startDate'=>$req['startDate'],
            'endDate'=>$req['endDate'],
            'status'=>1,
            'idHotel'=>$idHotel,

        ]);
        return redirect()->route('admin.hotel.manage.offers.showAll', ['idHotel'=>$idHotel]);
    }

    public function showUpdate($idHotel, $id){
        $offre = OffersPricing::findorFail($id);
        $OffersSyS  = Offers::all();

        return view('Staff.Admin.hotel.Offers.prices.create',['idHotel'=>$idHotel,'id'=>$id, "offre"=>$offre, 'OffersSyS'=>$OffersSyS]);
    }

    public function doUpdate(Request $req, $idHotel, $id){
        $data = OffersPricing::findorFail($id);
       /* $req->validate([
            'name' => ['required', 'string','min:2','max:255', 'unique:hotels'],
            'idChain' =>  ['required', 'numeric'],
            'adress' => ['required', 'string','min:2','max:255', 'unique:hotels'],
            'ville' => ['required', 'string','min:2','max:255'],
            'nbStars' =>  ['required', 'numeric'],
        ]);*/

        OffersPricing::where('id', $id)->update([
            'idOffre'=>$req['idOffre'],
            'price'=>$req['price'],
            'startDate'=>$req['startDate'],
            'endDate'=>$req['endDate'],

        ]);
        return redirect()->route('admin.hotel.manage.offers.showAll', ['idHotel'=>$idHotel]);
    }


    public function showStop($idHotel,$id){
        if(OffersPricing::where('id', $id)->get('status')->first()['status']=="0"){
            $para = "UnBlock";
        }else{
            $para = "Block";
        }
        return view('Staff.Admin.hotel.rooms.manage.confirm', ['id'=>$id,'para'=>$para, 'idHotel'=>$idHotel]);
    }
    public function doStop($idHotel,$id){
        if(OffersPricing::where('id', $id)->get('status')->first()['status']=="0"){
            OffersPricing::where('id', $id)->update([
                'status'=>'1',
            ]);
        }else{
            OffersPricing::where('id', $id)->update([
                'status'=>'0',
            ]);
        }

        return redirect()->route('admin.hotel.manage.rooms.showPerID', ['id'=>$id, 'idHotel'=>$idHotel]);
    }


    public function showDelete($idHotel,$id){
        return view('Staff.Admin.hotel.Offers.prices.confirm', ['id'=>$id,'para'=>'Delete', 'idHotel'=>$idHotel]);
    }
    public function doDelete($idHotel,$id){
        OffersPricing::destroy($id);
        return redirect()->route('admin.hotel.manage.offers.showAll', ['idHotel'=>$idHotel]);
    }
}
