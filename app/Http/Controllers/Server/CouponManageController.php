<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CouponManageController extends Controller
{
    //

    public function CouponList(){

        $data['list'] = Coupon::OrderBy('id','desc')->get();
        return view('Server.Coupon.list',$data);
    }

    public function CouponCreate(){

        return view('Server.Coupon.create');
    }

    public function CouponStore(Request $request){

        $store = new Coupon();
        $this->save($store,$request);

        return redirect()->route('CouponList')->with('success', 'Successfully Coupon Created.');

    }

    public function CouponUpdate(Request $request){

        $store = Coupon::where('id',$request->edit_id)->first();
        $this->save($store,$request);

        return redirect()->route('CouponList')->with('updated', 'Successfully Coupon updated.');

    }

    protected function save(Coupon $store,Request $request){

        $store->coupon_name = $request->coupon_name;
        $store->coupon_code = $request->coupon_code;
        $store->start_date = $request->start_date;
        $store->end_date = $request->end_date;
        $store->discount_amount = $request->discount_amount;
        $store->save();
    }

    public function CouponEdit($id){

        $data['edit'] = Coupon::where('id',$id)->first();
        return view('Server.Coupon.edit',$data);
    }

    public function CouponDelete($id){
        
        Coupon::where('id',$id)->delete();

        return redirect()->route('CouponList')->with('deleted', 'Successfully User deleted.');
    }
}
