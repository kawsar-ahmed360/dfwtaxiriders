<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookingManage;
use App\Models\VehicleManage;
use App\Models\Coupon;
class AdminBookingManageController extends Controller
{
    //

    public function BookingList(){

        $data['list'] = BookingManage::with(['Vehicle'])->OrderBy('id','desc')->get();
        return view('Server.Booking.list',$data);
    }

    public function BookingDetails($id){

        $data['booking'] = BookingManage::where('id',$id)->first();
        if(isset($data['booking'])){

            $data['vehicle'] = VehicleManage::where('id',$data['booking']->vehicle_id)->first();

        }

        if(isset($data['booking']->coupon_id)){
            $data['coupon'] = Coupon::where('id',$data['booking']->coupon_id)->first();
        }


        return view('Server.Booking.single_view',$data);


    }
    
    public function BookingDetailsInvoice($id){
        
            $data['booking'] = BookingManage::with(['Vehicle'])->where('id',$id)->first();
          
        //   dd($data['list']);
        $data["body"] = "This is Demo";
        return view('Server.Booking.pdf',$data);
    }
    
    public function BookingDelete($id){
        
        BookingManage::where('id',$id)->delete();
        
        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
            );
            
        return redirect()->back()->with($noti);
    }
        
    
}
