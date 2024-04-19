<?php

namespace App\Http\Controllers\Staff\Admin;

use App\Http\Controllers\Controller;
use App\Models\ExtraCharge;
use Illuminate\Http\Request;

class AdminManageHotelExtraChargesController extends Controller
{
    public function showAll($idHotel){
        $ExtraCharges = ExtraCharge::where("idHotel", $idHotel)->get();
        return view('Staff.Admin.hotel.ExtraCharges.index', ["ExtraCharges"=>$ExtraCharges, 'idHotel'=>$idHotel]);
    }

    public function showPerID($idHotel, $id){
        $ExtraCharge = ExtraCharge::findorFail($id);
        return view('Staff.Admin.hotel.ExtraCharges.show', ["ExtraCharge"=>$ExtraCharge, 'idHotel'=>$idHotel]);
    }

    public function showAdd($idHotel){
        return view('Staff.Admin.hotel.ExtraCharges.create',['ExtraCharge'=>null, 'idHotel'=>$idHotel]);
    }

    public function doAdd(Request $req, $idHotel){
        /*$req->validate([
            'idTypeRoom' =>  ['required', 'numeric'],
            'price' => ['required', 'floatval'],
            'startDate' =>  ['required', 'date'],
            'endDate' =>  ['required', 'date'],
        ]);*/

        ExtraCharge::create([
            'name'=>$req['name'],
            'desc'=>$req['desc'],
            'price'=>$req['price'],
            'startDate'=>$req['startDate'],
            'endDate'=>$req['endDate'],
            'status'=>1,
            'idHotel'=>$idHotel,

        ]);
        return redirect()->route('admin.hotel.manage.extracharges.showAll', ['idHotel'=>$idHotel]);
    }

    public function showUpdate($idHotel, $id){
        $ExtraCharge = ExtraCharge::findorFail($id);

        return view('Staff.Admin.hotel.ExtraCharges.create',['idHotel'=>$idHotel,'id'=>$id, "ExtraCharge"=>$ExtraCharge]);
    }

    public function doUpdate(Request $req, $idHotel, $id){
        $data = ExtraCharge::findorFail($id);
       /* $req->validate([
            'name' => ['required', 'string','min:2','max:255', 'unique:hotels'],
            'idChain' =>  ['required', 'numeric'],
            'adress' => ['required', 'string','min:2','max:255', 'unique:hotels'],
            'ville' => ['required', 'string','min:2','max:255'],
            'nbStars' =>  ['required', 'numeric'],
        ]);*/

        ExtraCharge::where('id', $id)->update([
            'name'=>$req['name'],
            'desc'=>$req['desc'],
            'price'=>$req['price'],
            'startDate'=>$req['startDate'],
            'endDate'=>$req['endDate'],

        ]);
        return redirect()->route('admin.hotel.manage.extracharges.showAll', ['idHotel'=>$idHotel]);
    }


    public function showStop($idHotel,$id){
        if(ExtraCharge::where('id', $id)->get('status')->first()['status']=="0"){
            $para = "UnBlock";
        }else{
            $para = "Block";
        }
        return view('Staff.Admin.hotel.ExtraCharges.confirm', ['id'=>$id,'para'=>$para, 'idHotel'=>$idHotel]);
    }
    public function doStop($idHotel,$id){
        if(ExtraCharge::where('id', $id)->get('status')->first()['status']=="0"){
            ExtraCharge::where('id', $id)->update([
                'status'=>'1',
            ]);
        }else{
            ExtraCharge::where('id', $id)->update([
                'status'=>'0',
            ]);
        }

        return redirect()->route('admin.hotel.manage.extracharges.showPerID', ['id'=>$id, 'idHotel'=>$idHotel]);
    }


    public function showDelete($idHotel,$id){
        return view('Staff.Admin.hotel.ExtraCharges.confirm', ['id'=>$id,'para'=>'Delete', 'idHotel'=>$idHotel]);
    }
    public function doDelete($idHotel,$id){
        ExtraCharge::destroy($id);
        return redirect()->route('admin.hotel.manage.extracharges.showAll', ['idHotel'=>$idHotel]);
    }
}
