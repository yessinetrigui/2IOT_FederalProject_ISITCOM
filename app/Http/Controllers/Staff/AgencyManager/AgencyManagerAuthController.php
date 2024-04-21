<?php

namespace App\Http\Controllers\Staff\AgencyManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgencyManagerAuthController extends Controller
{
    function showLogin(){

        return view('Staff.AgencyManager.Auth.login');
    }

    public function doLogin(Request $req){
        $req->validate([
            'email'=>'required|string|min:2|max:20',
            'password'=>'required|min:3|max:20'
        ]);
        $crds = [
            'email'=>$req->email,
            'password'=>$req->password,
        ];
        if (Auth::guard('AgencyManager')->attempt($crds)){
            return redirect()->route('AgencyManager.showPanel');
        }else{
            return redirect()->route('AgencyManager.showLogin');
        }
    }

    public function logout(){
        Auth::guard('AgencyManager')->logout();
        return redirect()->route('AgencyManager.showLogin');
    }

}
