<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\VehicleManage;
use Illuminate\Http\Request;

class VehicleManageController extends Controller
{
    //

    public function VehicleManageList(){

        $data['list'] = VehicleManage::OrderBy('id','desc')->get();
        return view('Server.vehicle.list',$data);
    }

    public function VehicleManageCreate(){

        return view('Server.vehicle.create');
    }

    public function VehicleManageEdit($id){

        $data['edit'] = VehicleManage::where('id',$id)->first();
        return view('Server.vehicle.edit',$data);
    }

    public function VehicleManageStore(Request $request){

        $store = new VehicleManage();
        $this->save($store,$request);

        return redirect()->route('VehicleManageList');
    }


    public function VehicleManageUpdate(Request $request){

        $store =  VehicleManage::where('id',$request->edit_id)->first();
        $this->save($store,$request);

        return redirect()->route('VehicleManageList');
    }

    protected function save(VehicleManage $store,Request $request){

        $store->title = $request->title;
        $store->service_name = $request->service_name;
        $store->areas_we_serve = $request->areas_we_serve;
        $store->rate = $request->rate;
        $store->flat_rate_10_miles = $request->flat_rate_10_miles;
        $store->flat_rate_20_miles = $request->flat_rate_20_miles;
        $store->flat_rate_30_miles = $request->flat_rate_30_miles;
        $store->flat_rate_40_miles = $request->flat_rate_40_miles;
        $store->bag_capacity = $request->bag_capacity;
        $store->passengers = $request->passengers;
        $store->description = $request->description;

        if($request->hasFile('image')){
            @unlink('upload/Vehicle/'.@$store->image);
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('upload/Vehicle/'), $imageName);
            $store->image = $imageName;
            $store->save();
        }

        $store->save();

    }

    public function VehicleManageDelete($id){

        VehicleManage::where('id',$id)->delete();

        return redirect()->route('VehicleManageList');
    }
}
