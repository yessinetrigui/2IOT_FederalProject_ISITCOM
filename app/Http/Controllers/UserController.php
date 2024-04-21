<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Car;
use Illuminate\Http\Request;

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
}
