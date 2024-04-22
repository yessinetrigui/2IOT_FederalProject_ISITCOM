<?php

namespace App\Http\Controllers\Staff\AgencyManager;
use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AgencyManagerManageCarsController extends Controller
{
    public function showAll(){
        $Cars = Car::where("agencyID", "=", auth()->user()->id)->get();
        return view('Staff.AgencyManager.car.index', ["Cars"=>$Cars]);
    }
    public function showPerID($id){
        $car = car::findorFail($id);
        return view('Staff.AgencyManager.car.show', ["car"=>$car]);

    }
    public function showAdd(){
        return view('Staff.AgencyManager.car.create',['car'=>null]);
    }
    public function doAdd(Request $req){

        $req->validate([
            'model' => ['required', 'string','min:2','max:255',],
            'description' => ['required', 'string','min:2','max:255'],
            'capacity' => ['required', 'string','min:1','max:255'],
            'brand' => ['required', 'string','min:2','max:255'],
            'bodyStyle' => ['required', 'string','min:2','max:255'],
            'picUrl1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $Img1 = time().'-1.'.$req->picUrl1->extension();
        $req->picUrl1->move(public_path('SiteImages/Cars/'. auth()->user()->id), $Img1);

        /*$Img2 = time().'-2.'.$req->picUrl2->extension();
        $req->picUrl2->move(public_path('SiteImages/Cars/'. auth()->user()->id), $Img2);

        $Img3 = time().'-3.'.$req->picUrl3->extension();
        $req->picUrl3->move(public_path('SiteImages/Cars/'. auth()->user()->id), $Img3);
*/
        car::create([
            'model'=>$req['model'],
            'description'=>$req['description'],
            'capacity'=>$req['capacity'],
            'brand'=>$req['brand'],
            'bodyStyle'=>$req['bodyStyle'],
            'agencyId'=>auth()->user()->id,
            'picUrl1'=>$Img1,
            'picUrl2'=>null,
            'picUrl3'=>null,

        ]);
        return redirect()->route('AgencyManager.car.showAll');
    }
    public function showUpdate($id){
        $car = car::findorFail($id);
        return view('Staff.AgencyManager.car.create',["car"=>$car]);
    }
    public function doUpdate(Request $req, $id){
        $data = car::findorFail($id);

        $req->validate([
            'model' => ['required', 'string','min:2','max:255',],
            'description' => ['required', 'string','min:2','max:255'],
            'capacity' => ['required', 'string','min:1','max:255'],
            'brand' => ['required', 'string','min:2','max:255'],
            'bodyStyle' => ['required', 'string','min:2','max:255'],
            'picUrl1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);
        $Img1 = time().'.'.$req->picUrl1->extension();
        $req->picUrl1->move(public_path('SiteImages/Cars/'. auth()->user()->id), $Img1);

      /*  $Img2 = time().'.'.$req->picUrl2->extension();
        $req->picUrl2->move(public_path('SiteImages/Cars/'. auth()->user()->id), $Img2);

        $Img3 = time().'.'.$req->picUrl3->extension();
        $req->picUrl3->move(public_path('SiteImages/Cars/'. auth()->user()->id), $Img3);
*/
        car::where('id', $id)->update([
            'model'=>$req['model'],
            'description'=>$req['description'],
            'capacity'=>$req['capacity'],
            'brand'=>$req['brand'],
            'bodyStyle'=>$req['bodyStyle'],
            'picUrl1'=>$Img1,
            'picUrl2'=>null,
            'picUrl3'=>null,
        ]);
        return redirect()->route('AgencyManager.car.showPerID', ['id'=>$id]);
    }


    public function showStop($id){
        if(car::where('id', $id)->get('status')->first()['status']=="0"){
            $para = "UnBlock";
        }else{
            $para = "Block";
        }
        return view('Staff.AgencyManager.car.confirm', ['id'=>$id,'para'=>$para]);
    }

    public function doStop($id){
        if(car::where('id', $id)->get('status')->first()['status']=="0"){
            car::where('id', $id)->update([
                'status'=>'1',
            ]);
        }else{
            car::where('id', $id)->update([
                'status'=>'0',
            ]);
        }

        return redirect()->route('AgencyManager.car.showPerID', ['id'=>$id]);
    }



    public function showDelete($id){
        return view('Staff.AgencyManager.car.confirm', ['id'=>$id,'para'=>'Delete']);
    }
    public function doDelete($id){
        car::destroy($id);
        return redirect()->route('AgencyManager.car.showAll');
    }
}
