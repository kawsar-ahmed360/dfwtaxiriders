<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactMessageManage extends Controller
{
    //

    public function ContactMessageList(){

        $data['list'] = ContactUs::latest()->get();
        $data['list_m'] = ContactUs::latest()->get();

        return view('Server.ContactMessage.list',$data);
    }

    public function ContactMessageDelete($id){

        ContactUs::where('id',$id)->delete();
        return redirect()->back();
    }

    public function ContactMultiDelete(Request $request){
          $get_items = ContactUs::whereIn('id',$request->checked_ids)->get();
        
        if($get_items){
            foreach($get_items as $key=>$del){
                $del->delete();
            }
            
              $noti = array(
                    'message' => 'Successfully Removed',
                    'alert-type' => 'success'
                );

                return redirect()->back()->with($noti);
        }
    }
}
