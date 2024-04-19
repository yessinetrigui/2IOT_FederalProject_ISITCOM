<?php

namespace App\Http\Controllers\Staff\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chain;
use App\Models\Hotel;
use App\Models\Rooms;
use App\Models\TypeRooms;
use App\Models\zones;
use Illuminate\Http\Request;

use function PHPUnit\Framework\countOf;

class AdminManageHotelController extends Controller
{

    public function showAll(){
        $hotels = Hotel::all();
        return view('Staff.Admin.hotel.manage.index', ["hotels"=>$hotels]);
    }

    public function showPerID($idHotel){
        $hotel = Hotel::findorFail($idHotel);
        $chainName = Chain::where('id', $hotel->idChain)->get('name')->first()->name;
        $AllRoomsNumber = Rooms::where("idHotel", $hotel->id)->count();
        $AllRoomsNumberAvailble = Rooms::where("idHotel", $hotel->id)->where("status", 1)->count();

        $AllRoomsNumberAvailblePerType = Rooms::where("idHotel", $hotel->id)->where("status", 1)->groupBy('idTypeRoom')->get('idTypeRoom');

        return view('Staff.Admin.hotel.manage.show', ["hotel"=>$hotel, 'chainName'=>$chainName, 'AllRoomsNumber'=>$AllRoomsNumber,
         'AllRoomsNumberAvailble'=>$AllRoomsNumberAvailble, 'AllRoomsNumberAvailblePerType'=>$AllRoomsNumberAvailblePerType]);
    }

    public function showAdd(){
        $RoomsTypes = TypeRooms::all();
        $Chains = Chain::all();
        $zones = zones::all();
        return view('Staff.Admin.hotel.manage.create',['hotel'=>null, 'TypesRooms'=>$RoomsTypes, 'chains'=>$Chains, 'zones'=>$zones]);
    }

    public function doAdd(Request $req){

        $req->validate([
            'name' => ['required', 'string','min:2','max:255', 'unique:hotels'],
            'idChain' =>  ['required', 'numeric'],
            'adress' => ['required', 'string','min:2','max:255', 'unique:hotels'],
            'idZone' => ['required', 'numeric'],
            'nbStars' =>  ['required', 'numeric'],
        ]);
        $Hotel = Hotel::create([
            'name'=>$req['name'],
            'idChain'=>$req['idChain'],
            'adress'=>$req['adress'],
            'idZone'=>$req['idZone'],
            'nbStars'=>$req['nbStars'],
            'status'=> 1,
        ]);
        $RoomsTypes = TypeRooms::all();
        foreach ($RoomsTypes as $RoomType) {
            $nbRooms = $req[$RoomType->id];
            $RoomTypeId = $RoomType->id;
            $x = 0;
            for($x=0; $x<$nbRooms; $x++){
                Rooms::create([
                    'idHotel' => $Hotel->id,
                    'idTypeRoom' => $RoomTypeId,
                    'status' => 1
                ]);
            }
        }



        return redirect()->route('admin.hotel.showAll');
    }

    public function showUpdate($idHotel){
        $Chains = Chain::all();
        $zones = zones::all();

        $hotel = Hotel::findorFail($idHotel);
        $RoomsTypes = TypeRooms::all();

        return view('Staff.Admin.hotel.manage.create',["hotel"=>$hotel, 'TypesRooms'=>$RoomsTypes, 'chains'=>$Chains, 'zones'=>$zones]);
    }

    public function doUpdate(Request $req, $idHotel){
        $data = Hotel::findorFail($idHotel);

        $req->validate([
          //  'name' => ['required', 'string','min:2','max:255', 'unique:hotels'],
            'idChain' =>  ['required', 'numeric'],
           // 'adress' => ['required', 'string','min:2','max:255', 'unique:hotels'],
            'nbStars' =>  ['required', 'numeric'],
        ]);

        Hotel::where('id', $idHotel)->update([
            'name'=>$req['name'],
            'idChain'=>$req['idChain'],
            'adress'=>$req['adress'],
            'idZone'=>$req['idZone'],
            'nbStars'=>$req['nbStars'],
        ]);
        return redirect()->route('admin.hotel.showPerID', ['idHotel'=>$idHotel]);
    }


    public function showStop($idHotel){
        if(Hotel::where('id', $idHotel)->get('status')->first()['status']=="0"){
            $para = "UnBlock";
        }else{
            $para = "Block";
        }
        return view('Staff.Admin.hotel.manage.confirm', ['idHotel'=>$idHotel,'para'=>$para]);
    }
    public function doStop($idHotel){
        if(Hotel::where('id', $idHotel)->get('status')->first()['status']=="0"){
            Hotel::where('id', $idHotel)->update([
                'status'=>'1',
            ]);
        }else{
            Hotel::where('id', $idHotel)->update([
                'status'=>'0',
            ]);
        }

        return redirect()->route('admin.hotel.showPerID', ['idHotel'=>$idHotel]);
    }



    public function showDelete($idHotel){
        return view('Staff.Admin.hotel.manage.confirm', ['idHotel'=>$idHotel,'para'=>'Delete']);
    }
    public function doDelete($idHotel){
        Hotel::destroy($idHotel);
        return redirect()->route('admin.hotel.showAll');
    }


}
