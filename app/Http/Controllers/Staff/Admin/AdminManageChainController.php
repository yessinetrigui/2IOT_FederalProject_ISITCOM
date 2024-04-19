<?php

namespace App\Http\Controllers\Staff\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminManageChainController extends Controller
{
    public function showAll(){
        $Chains = Chain::all();

        return view('Staff.Admin.chain.index', ["Chains"=>$Chains]);
    }
    public function showPerID($id){
        $Chain = Chain::findorFail($id);
        return view('Staff.Admin.chain.show', ["Chain"=>$Chain]);

    }
    public function showAdd(){
        return view('Staff.Admin.chain.create',['Chain'=>null]);
    }
    public function doAdd(Request $req){

        $req->validate([
            'name' => ['required', 'string','min:2','max:255', 'unique:chain'],

        ]);
        Chain::create([
            'name'=>$req['name'],
            'status' => 1,

        ]);
        return redirect()->route('admin.chain.showAll');
    }
    public function showUpdate($id){
        $Chain = Chain::findorFail($id);
        return view('Staff.Admin.chain.create',["Chain"=>$Chain]);
    }
    public function doUpdate(Request $req, $id){
        $data = Chain::findorFail($id);

        $req->validate([
            'name' => ['required', 'string','min:2','max:255'],
        ]);

        Chain::where('id', $id)->update([
            'name'=>$req['name'],



        ]);
        return redirect()->route('admin.chain.showPerID', ['id'=>$id]);
    }


    public function showStop($id){
        if(Chain::where('id', $id)->get('status')->first()['status']=="0"){
            $para = "UnBlock";
        }else{
            $para = "Block";
        }
        return view('Staff.Admin.chain.confirm', ['id'=>$id,'para'=>$para]);
    }
    public function doStop($id){
        if(Chain::where('id', $id)->get('status')->first()['status']=="0"){
            Chain::where('id', $id)->update([
                'status'=>'1',
            ]);
        }else{
            Chain::where('id', $id)->update([
                'status'=>'0',
            ]);
        }

        return redirect()->route('admin.chain.showPerID', ['id'=>$id]);
    }



    public function showDelete($id){
        return view('Staff.Admin.chain.confirm', ['id'=>$id,'para'=>'Delete']);
    }
    public function doDelete($id){
        Chain::destroy($id);
        return redirect()->route('admin.chain.showAll');
    }


}
