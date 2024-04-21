<?php

namespace App\Http\Controllers\Staff\Admin;
use App\Http\Controllers\Controller;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Http\Request;

class AdminManageRentalsController extends Controller
{
    public function showAll(){
        $Rentals = Rental::all();

        return view('Staff.Admin.Rentals.index', ["Rentals"=>$Rentals]);
    }
}
