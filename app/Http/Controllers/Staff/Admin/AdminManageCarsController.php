<?php

namespace App\Http\Controllers\Staff\Admin;
use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class AdminManageCarsController extends Controller
{
    public function showAll(){
        $Cars = Car::all();
        return view('Staff.Admin.Cars.index', ["Cars"=>$Cars]);
    }
}
