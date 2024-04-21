<?php

namespace App\Http\Controllers\Staff\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminManageAgencyController extends Controller
{
    public function showAll(){
        $Agencies = Agency::all();

        return view('Staff.Admin.Agency.index', ["Agencies"=>$Agencies]);
    }
    public function showPerID($id){
        $Agency = Agency::findorFail($id);
        return view('Staff.Admin.Agency.show', ["Agency"=>$Agency]);

    }
    public function showAdd(){
        return view('Staff.Admin.Agency.create',['Agency'=>null]);
    }
    public function doAdd(Request $req){

        $req->validate([
            'name' => ['required', 'string','min:2','max:255', 'unique:agencies'],
            'location' => ['required'],
            'telephone' => ['required'],
            'email' => ['required'],
            'password' => ['required'],

        ]);
        Agency::create([
            'name'=>$req['name'],
            'location'=>$req['location'],
            'telephone'=>$req['telephone'],
            'email'=>$req['email'],
            'password'=>Hash::make($req['password']),
            'status' => 1,

        ]);
        return redirect()->route('admin.agency.showAll');
    }
    public function showUpdate($id){
        $Agency = Agency::findorFail($id);
        return view('Staff.Admin.Agency.create',["Agency"=>$Agency]);
    }
    public function doUpdate(Request $req, $id){
        $data = Agency::findorFail($id);

        $req->validate([
            'name' => ['required', 'string','min:2','max:255'],
            'location' => ['required'],
            'telephone' => ['required'],
            'email' => ['required'],
            'password' => ['required'],

        ]);

        Agency::where('id', $id)->update([
            'name'=>$req['name'],
            'location'=>$req['location'],
            'telephone'=>$req['telephone'],
            'email'=>$req['email'],
            'password'=>Hash::make($req['password']),
        ]);
        return redirect()->route('admin.agency.showPerID', ['id'=>$id]);
    }


    public function showStop($id){
        if(Agency::where('id', $id)->get('status')->first()['status']=="0"){
            $para = "UnBlock";
        }else{
            $para = "Block";
        }
        return view('Staff.Admin.Agency.confirm', ['id'=>$id,'para'=>$para]);
    }
    public function doStop($id){
        if(Agency::where('id', $id)->get('status')->first()['status']=="0"){
            Agency::where('id', $id)->update([
                'status'=>'1',
            ]);
        }else{
            Agency::where('id', $id)->update([
                'status'=>'0',
            ]);
        }

        return redirect()->route('admin.agency.showPerID', ['id'=>$id]);
    }



    public function showDelete($id){
        return view('Staff.Admin.Agency.confirm', ['id'=>$id,'para'=>'Delete']);
    }
    public function doDelete($id){
        Agency::destroy($id);
        return redirect()->route('admin.agency.showAll');
    }


}
