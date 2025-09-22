<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;
use Image;

class ProfileUpdateController extends Controller
{
    //

    public function ProfileUpdateForm(){

        return view('Server.ProfileUpdate.profile');
    }

    public function ProfileUpdatePost(Request $request){
   
        
        // return $request->all();

        $update = User::where('id',Auth::user()->id)->first();
        // return $update;
        $update->name = $request->name;
        $update->user_name = 'SuperAdmin';
        $update->email = $request->email;
        $update->phone = $request->phone;

        if($request->hasFile('image')){
            $image = $request->file('image');
            @unlink('upload/Profile/'.@$update->image);
            $fullname = time().'image'.'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(660,660)->save('upload/Profile/'.$fullname);
            $update->image = $fullname;
            $update->save();
        }
        
        $update->save();
        return redirect()->back()->with('success', 'Profile updated successfully.');
        // $update->phone = $request->phone;

    }
}
