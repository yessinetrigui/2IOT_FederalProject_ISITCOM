<?php

namespace App\Http\Controllers\Staff\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rooms;
use App\Models\TarifRooms;
use App\Models\TypeRooms;
use Illuminate\Http\Request;

class AdminManageHotelRoomsPricesController extends Controller
{
    public function showAll($idHotel){
        $Prices = TarifRooms::where("idHotel", $idHotel)->get();
        return view('Staff.Admin.hotel.rooms.prices.index', ["Prices"=>$Prices, 'idHotel'=>$idHotel]);
    }
/*
    public function showPerID($idHotel, ){
        $hotel = TarifRooms::findorFail($id);
        return view('Staff.Admin.hotel.show', ["hotel"=>$hotel]);
    }*/

    public function showAdd($idHotel){
        $RoomsTypes  = TypeRooms::whereIn("id", Rooms::where('idHotel', '=', $idHotel)->get('idTypeRoom'))->get();
        return view('Staff.Admin.hotel.rooms.prices.create',['RoomPrice'=>null, 'RoomsTypes'=>$RoomsTypes, 'idHotel'=>$idHotel]);
    }

    public function doAdd(Request $req, $idHotel){
        /*$req->validate([
            'idTypeRoom' =>  ['required', 'numeric'],
            'price' => ['required', 'floatval'],
            'startDate' =>  ['required', 'date'],
            'endDate' =>  ['required', 'date'],
        ]);*/
        TarifRooms::create([
            'idTypeRoom'=>$req['idTypeRoom'],
            'price'=>$req['price'],
            'startDate'=>$req['startDate'],
            'endDate'=>$req['endDate'],
            'idHotel'=>$idHotel,

        ]);
        return redirect()->route('admin.hotel.manage.rooms.prices.showAll', ['idHotel'=>$idHotel]);
    }

    public function showUpdate($idHotel, $id){
        $RoomPrice = TarifRooms::findorFail($id);
        $RoomsTypes = TypeRooms::all();

        return view('Staff.Admin.hotel.rooms.prices.create',['idHotel'=>$idHotel,'id'=>$id, "RoomPrice"=>$RoomPrice, 'RoomsTypes'=>$RoomsTypes]);
    }

    public function doUpdate(Request $req, $idHotel, $id){
        $data = TarifRooms::findorFail($id);
       /* $req->validate([
            'name' => ['required', 'string','min:2','max:255', 'unique:hotels'],
            'idChain' =>  ['required', 'numeric'],
            'adress' => ['required', 'string','min:2','max:255', 'unique:hotels'],
            'ville' => ['required', 'string','min:2','max:255'],
            'nbStars' =>  ['required', 'numeric'],
        ]);*/

        TarifRooms::where('id', $id)->update([
            'idTypeRoom'=>$req['idTypeRoom'],
            'price'=>$req['price'],
            'startDate'=>$req['startDate'],
            'endDate'=>$req['endDate'],
        ]);
        return redirect()->route('admin.hotel.manage.rooms.prices.showAll', ['idHotel'=>$idHotel]);
    }


    public function showStop($idHotel,$id){
        if(TarifRooms::where('id', $id)->get('status')->first()['status']=="0"){
            $para = "UnBlock";
        }else{
            $para = "Block";
        }
        return view('Staff.Admin.hotel.rooms.prices.confirm', ['id'=>$id,'para'=>$para, 'idHotel'=>$idHotel]);
    }
    public function doStop($id){
        if(TarifRooms::where('id', $id)->get('status')->first()['status']=="0"){
            TarifRooms::where('id', $id)->update([
                'status'=>'1',
            ]);
        }else{
            TarifRooms::where('id', $id)->update([
                'status'=>'0',
            ]);
        }

        return redirect()->route('admin.hotel.showPerID', ['id'=>$id]);
    }



    public function showDelete($idHotel,$id){
        return view('Staff.Admin.hotel.rooms.prices.confirm', ['id'=>$id,'para'=>'Delete', 'idHotel'=>$idHotel]);
    }
    public function doDelete($idHotel,$id){
        TarifRooms::destroy($id);
        return redirect()->route('admin.hotel.manage.rooms.prices.showAll', ['idHotel'=>$idHotel]);
    }

}
