<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Car;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    public function show_home(){
        $agencies = Agency::all();
        return view("home", ["agencies"=>$agencies]);
    }

    public function show_agence($id){
        $agency = Agency::where("id", "=", $id)->get()->first();
        $cars = Car::where("agencyId", "=", $id)->get();
        return view("Users.agence", ["agency"=>$agency, "cars"=>$cars]);
    }

    public function doOrder(Request $req, $id){

        $req->validate([
            'lastName' => ['required', 'string','min:1','max:255'],
            'firstName' => ['required', 'string','min:1','max:255'],
            'iDCardNumber' => ['required'],
            'telephone' => ['required'],
            'email' => ['required', 'string','min:1','max:255'],
            'startDate' => ['required'],
            'endDate' => ['required'],
            'address' => ['required'],

        ]);
        $clientId = DB::table('clients')->insertGetId([
            'lastName' => $req['lastName'],
            'firstName' => $req['firstName'],
            'iDCardNumber' => $req['iDCardNumber'],
            'telephone' => $req['telephone'],
            'email' => $req['email'],
            'address' => $req['address'],
        ]);
        $idOff = Offer::where('startDate', '<=', $req->startDate)
        ->where('endDate', '>=', $req->endDate)
        ->value('id');
        if($idOff==null){
            return Redirect::back()->with('message','Not Available!');
        }
        $rentalId = DB::table('rentals')->insertGetId([
            'clientId' => $clientId,
            'offerId' => $idOff,
            'startDate' => $req['startDate'],
            'endDate' => $req['endDate'],
            "status"=>0
        ]);

        return Redirect::back()->with('message','Operation Successful !');

    }
}
