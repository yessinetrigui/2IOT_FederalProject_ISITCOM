<?php

namespace App\Http\Controllers\Staff\AgencyManager;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Offer;
use App\Models\Offers;
use Illuminate\Http\Request;

class AgencyManagerManageOffersController extends Controller
{
    public function showAll(){
        $Offers = Offer::where("agencyID", "=", auth()->user()->id)->get();
        return view('Staff.AgencyManager.offer.index', ["Offres"=>$Offers]);
    }

    public function showPerID($id){
        $offer = offer::findorFail($id);

        return view('Staff.AgencyManager.offer.show', ["offer"=>$offer]);

    }
    public function showAdd(){
        $Cars = Car::where("agencyID", "=", auth()->user()->id)->get();
        return view('Staff.AgencyManager.offer.create',['offer'=>null, "cars"=>$Cars]);
    }
    public function doAdd(Request $req){

        $req->validate([
            'carId' => ['required'],
            'price' => ['required'],
            'startDate' => ['required'],
            'endDate' => ['required'],

        ]);

        offer::create([
            'carId'=>$req['carId'],
            'price'=>$req['price'],
            'startDate'=>$req['startDate'],
            'endDate'=>$req['endDate'],
            'agencyId'=>auth()->user()->id


        ]);
        return redirect()->route('AgencyManager.offer.showAll');
    }
    public function showUpdate($id){
        $offer = offer::findorFail($id);
        $cars = Car::where("agencyID", "=", auth()->user()->id)->get();
        return view('Staff.AgencyManager.offer.create',["offer"=>$offer, "cars"=>$cars]);
    }
    public function doUpdate(Request $req, $id){
        $data = offer::findorFail($id);

        $req->validate([
            'carId' => ['required'],
            'price' => ['required'],
            'startDate' => ['required'],
            'endDate' => ['required'],

        ]);

        offer::where('id', $id)->update([
            'carId'=>$req['carId'],
            'price'=>$req['price'],
            'startDate'=>$req['startDate'],
            'endDate'=>$req['endDate'],
        ]);
        return redirect()->route('AgencyManager.offer.showPerID', ['id'=>$id]);
    }


    public function showStop($id){
        if(offer::where('id', $id)->get('status')->first()['status']=="0"){
            $para = "UnBlock";
        }else{
            $para = "Block";
        }
        return view('Staff.AgencyManager.offer.confirm', ['id'=>$id,'para'=>$para]);
    }

    public function doStop($id){
        if(offer::where('id', $id)->get('status')->first()['status']=="0"){
            offer::where('id', $id)->update([
                'status'=>'1',
            ]);
        }else{
            offer::where('id', $id)->update([
                'status'=>'0',
            ]);
        }

        return redirect()->route('AgencyManager.offer.showPerID', ['id'=>$id]);
    }



    public function showDelete($id){
        return view('Staff.AgencyManager.offer.confirm', ['id'=>$id,'para'=>'Delete']);
    }
    public function doDelete($id){
        offer::destroy($id);
        return redirect()->route('AgencyManager.offer.showAll');
    }

}
