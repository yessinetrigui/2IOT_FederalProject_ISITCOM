<?php

namespace App\Http\Controllers\Staff\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Rooms;
use App\Models\TypeRooms;




class AdminManageHotelRoomsController extends Controller
{
    public function showAll($idHotel){
        $Rooms = Rooms::where("idHotel", $idHotel)->get();
        return view('Staff.Admin.hotel.rooms.manage.index', ["Rooms"=>$Rooms, 'idHotel'=>$idHotel]);
    }


    public function showPerID($idHotel, $id){
        $room = Rooms::findorFail($id);
        return view('Staff.Admin.hotel.rooms.manage.show', ["room"=>$room, 'idHotel'=>$idHotel]);
    }

    public function showAdd($idHotel){
        $RoomsTypes  = TypeRooms::all();
        return view('Staff.Admin.hotel.rooms.manage.create',['room'=>null, 'RoomsTypes'=>$RoomsTypes, 'idHotel'=>$idHotel]);
    }

    public function doAdd(Request $req, $idHotel){
        /*$req->validate([
            'idTypeRoom' =>  ['required', 'numeric'],
            'price' => ['required', 'floatval'],
            'startDate' =>  ['required', 'date'],
            'endDate' =>  ['required', 'date'],
        ]);*/
        Rooms::create([
            'idTypeRoom'=>$req['idTypeRoom'],
            'idHotel'=>$idHotel,
            'status'=>1,

        ]);
        return redirect()->route('admin.hotel.manage.rooms.showAll', ['idHotel'=>$idHotel]);
    }

    public function showUpdate($idHotel, $id){
        $room = Rooms::findorFail($id);
        $RoomsTypes = TypeRooms::all();

        return view('Staff.Admin.hotel.rooms.manage.create',['idHotel'=>$idHotel,'id'=>$id, "room"=>$room, 'RoomsTypes'=>$RoomsTypes]);
    }

    public function doUpdate(Request $req, $idHotel, $id){
        $data = Rooms::findorFail($id);
       /* $req->validate([
            'name' => ['required', 'string','min:2','max:255', 'unique:hotels'],
            'idChain' =>  ['required', 'numeric'],
            'adress' => ['required', 'string','min:2','max:255', 'unique:hotels'],
            'ville' => ['required', 'string','min:2','max:255'],
            'nbStars' =>  ['required', 'numeric'],
        ]);*/

        Rooms::where('id', $id)->update([
            'idTypeRoom'=>$req['idTypeRoom'],

        ]);
        return redirect()->route('admin.hotel.manage.rooms.showAll', ['idHotel'=>$idHotel]);
    }


    public function showStop($idHotel,$id){
        if(Rooms::where('id', $id)->get('status')->first()['status']=="0"){
            $para = "UnBlock";
        }else{
            $para = "Block";
        }
        return view('Staff.Admin.hotel.rooms.manage.confirm', ['id'=>$id,'para'=>$para, 'idHotel'=>$idHotel]);
    }
    public function doStop($idHotel,$id){
        if(Rooms::where('id', $id)->get('status')->first()['status']=="0"){
            Rooms::where('id', $id)->update([
                'status'=>'1',
            ]);
        }else{
            Rooms::where('id', $id)->update([
                'status'=>'0',
            ]);
        }

        return redirect()->route('admin.hotel.manage.rooms.showPerID', ['id'=>$id, 'idHotel'=>$idHotel]);
    }



    public function showDelete($idHotel,$id){
        return view('Staff.Admin.hotel.rooms.manage.confirm', ['id'=>$id,'para'=>'Delete', 'idHotel'=>$idHotel]);
    }
    public function doDelete($idHotel,$id){
        Rooms::destroy($id);
        return redirect()->route('admin.hotel.manage.rooms.showAll', ['idHotel'=>$idHotel]);
    }

}
