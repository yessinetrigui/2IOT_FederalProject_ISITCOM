<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuth extends Controller
{
    public function show_login(){
            return view('Guests.login');
    }

    public function verif_login(Request $req){
        $req->validate([
            'user'=>'required|string|min:2|max:20',
            'pass'=>'required|min:3|max:20'
        ]);
        $crds = [
            'user'=>$req->user,
            'password'=>$req->pass,
        ];
        if (Auth::guard('web')->attempt($crds)){
            return redirect()->route('user.profile');
        }else{
            return redirect()->route('user.login');
        }

    }
    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('user.home');
    }
}
