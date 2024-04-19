<?php

namespace App\Http\Controllers\Staff\Admin\Configurations;

use App\Http\Controllers\Controller;
use App\Models\zones;
use Illuminate\Http\Request;

class AdminManageZonesController extends Controller
{
    public function showAll(){
        $zones = zones::all();
        return view('Staff.Admin.Configurations.Zones.index', ["zones"=>$zones]);
    }

    public function showPerID($id){
        $zone = zones::findorFail($id);
        return view('Staff.Admin.Configurations.Zones.show', ["zone"=>$zone]);
    }

    public function showAdd(){
        return view('Staff.Admin.Configurations.Zones.create',['zone'=>null]);
    }

    public function doAdd(Request $req){

        $req->validate([
            'name' => ['required', 'string','min:2','max:255', 'unique:offers'],

        ]);
        zones::create([
            'name'=>$req['name'],

        ]);
        return redirect()->route('admin.configurations.zones.showAll');
    }

    public function showUpdate($id){
        $zone = zones::findorFail($id);
        return view('Staff.Admin.Configurations.Zones.create',["zone"=>$zone]);
    }

    public function doUpdate(Request $req, $id){
        $data = zones::findorFail($id);

       /* $req->validate([
            'name' => ['required', 'string','min:2','max:255'],
            'desc' => ['required', 'string','min:2','max:255'],
        ]);
*/
        zones::where('id', $id)->update([
            'name'=>$req['name'],

        ]);
        return redirect()->route('admin.configurations.zones.showPerID', ['id'=>$id]);
    }





    public function showDelete($id){
        return view('Staff.Admin.Configurations.Zones.confirm', ['id'=>$id,'para'=>'Delete']);
    }
    public function doDelete($id){
        zones::destroy($id);
        return redirect()->route('admin.configurations.zones.showAll');
    }

}
