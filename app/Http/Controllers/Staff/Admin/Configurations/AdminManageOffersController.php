<?php

namespace App\Http\Controllers\Staff\Admin\Configurations;

use App\Http\Controllers\Controller;
use App\Models\Offers;
use Illuminate\Http\Request;

class AdminManageOffersController extends Controller
{
    public function showAll(){
        $Offers = Offers::all();
        return view('Staff.Admin.Configurations.Offers.index', ["Offres"=>$Offers]);
    }

    public function showPerID($id){
        $Offer = Offers::findorFail($id);
        return view('Staff.Admin.Configurations.Offers.show', ["Offer"=>$Offer]);
    }

    public function showAdd(){
        return view('Staff.Admin.Configurations.Offers.create',['Offer'=>null]);
    }

    public function doAdd(Request $req){

        $req->validate([
            'name' => ['required', 'string','min:2','max:255', 'unique:offers'],
            'desc' => ['required', 'string','min:2','max:255'],

        ]);
        Offers::create([
            'name'=>$req['name'],
            'desc'=>$req['desc'],
            'status'=>'1',

        ]);
        return redirect()->route('admin.configurations.offers.showAll');
    }

    public function showUpdate($id){
        $Offer = Offers::findorFail($id);
        return view('Staff.Admin.Configurations.Offers.create',["Offer"=>$Offer]);
    }

    public function doUpdate(Request $req, $id){
        $data = Offers::findorFail($id);

       /* $req->validate([
            'name' => ['required', 'string','min:2','max:255'],
            'desc' => ['required', 'string','min:2','max:255'],
        ]);
*/
        Offers::where('id', $id)->update([
            'name'=>$req['name'],
            'desc'=>$req['desc'],



        ]);
        return redirect()->route('admin.configurations.offers.showPerID', ['id'=>$id]);
    }


    public function showStop($id){
        if(Offers::where('id', $id)->get('status')->first()['status']=="0"){
            $para = "UnBlock";
        }else{
            $para = "Block";
        }
        return view('Staff.Admin.Configurations.Offers.confirm', ['id'=>$id,'para'=>$para]);
    }
    public function doStop($id){
        if(Offers::where('id', $id)->get('status')->first()['status']=="0"){
            Offers::where('id', $id)->update([
                'status'=>'1',
            ]);
        }else{
            Offers::where('id', $id)->update([
                'status'=>'0',
            ]);
        }

        return redirect()->route('admin.configurations.offers.showPerID', ['id'=>$id]);
    }



    public function showDelete($id){
        return view('Staff.Admin.Configurations.Offers.confirm', ['id'=>$id,'para'=>'Delete']);
    }
    public function doDelete($id){
        Offers::destroy($id);
        return redirect()->route('admin.configurations.offers.showAll');
    }

}
