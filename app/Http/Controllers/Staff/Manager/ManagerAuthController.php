<?php

namespace App\Http\Controllers\Staff\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerAuthController extends Controller
{
    function showLogin(){

        return view('Staff.Manager.Auth.login', ['title'=>'Admin']);
    }

    public function doLogin(Request $req){
        $req->validate([
            'username'=>'required|string|min:2|max:20',
            'password'=>'required|min:3|max:20'
        ]);
        $crds = [
            'username'=>$req->username,
            'password'=>$req->password,
        ];
        if (Auth::guard('admin')->attempt($crds)){
            return redirect()->route('manager.showPanel');
        }else{
            return redirect()->route('manager.showLogin');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('manager.showLogin');
    }

}
