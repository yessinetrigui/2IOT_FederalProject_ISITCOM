<?php

namespace App\Http\Controllers\Staff\Admin;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;

class AdminManageClientsController extends Controller
{
    public function showAll(){
        $Users = User::all();

        return view('Staff.Admin.Clients.index', ["Users"=>$Users]);
    }
}
