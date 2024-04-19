<?php

namespace App\Http\Controllers\Staff\Admin\Configurations;

use App\Http\Controllers\Controller;
use App\Models\TypeRooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminManageRoomsTypesController extends Controller
{

        public function showAll(){
            $RoomsTypes = TypeRooms::all();
            return view('Staff.Admin.Configurations.RoomsTypes.index', ["RoomsTypes"=>$RoomsTypes]);
        }

        public function showPerID($id){
            $RoomsTypes = TypeRooms::findorFail($id);
            return view('Staff.Admin.Configurations.RoomsTypes.show', ["RoomsTypes"=>$RoomsTypes]);
        }

        public function showAdd(){
            return view('Staff.Admin.Configurations.RoomsTypes.create',['RoomsTypes'=>null]);
        }

        public function doAdd(Request $req){

            $req->validate([
                'name' => ['required', 'string','min:2','max:255', 'unique:typerooms'],
                'maxSize' => ['required', 'numeric','min:1','max:4'],

            ]);
            TypeRooms::create([
                'name'=>$req['name'],
                'desc'=>$req['desc'],
                'maxSize'=>$req['maxSize'],
                'status'=>'1',

            ]);
            return redirect()->route('admin.configurations.RoomsTypes.showAll');
        }

        public function showUpdate($id){
            $RoomsTypes = TypeRooms::findorFail($id);
            return view('Staff.Admin.Configurations.RoomsTypes.create',["RoomsTypes"=>$RoomsTypes]);
        }

        public function doUpdate(Request $req, $id){
            $data = TypeRooms::findorFail($id);

            $req->validate([
                'name' => ['required', 'string','min:2','max:255'],
                'desc' => ['required', 'string','min:2','max:255'],
                'maxSize' => ['required', 'numeric','min:1','max:4'],
            ]);

            TypeRooms::where('id', $id)->update([
                'name'=>$req['name'],
                'maxSize'=>$req['maxSize'],



            ]);
            return redirect()->route('admin.configurations.RoomsTypes.showPerID', ['id'=>$id]);
        }


        public function showStop($id){
            if(TypeRooms::where('id', $id)->get('status')->first()['status']=="0"){
                $para = "UnBlock";
            }else{
                $para = "Block";
            }
            return view('Staff.Admin.Configurations.RoomsTypes.confirm', ['id'=>$id,'para'=>$para]);
        }
        public function doStop($id){
            if(TypeRooms::where('id', $id)->get('status')->first()['status']=="0"){
                TypeRooms::where('id', $id)->update([
                    'status'=>'1',
                ]);
            }else{
                TypeRooms::where('id', $id)->update([
                    'status'=>'0',
                ]);
            }

            return redirect()->route('admin.configurations.RoomsTypes.showPerID', ['id'=>$id]);
        }



        public function showDelete($id){
            return view('Staff.Admin.Configurations.RoomsTypes.confirm', ['id'=>$id,'para'=>'Delete']);
        }
        public function doDelete($id){
            TypeRooms::destroy($id);
            return redirect()->route('admin.configurations.RoomsTypes.showAll');
        }


    }

