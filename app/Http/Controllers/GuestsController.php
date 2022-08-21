<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guests;

class GuestsController extends Controller
{
    public function GuestsLoginPageIndex(){
        return view('GuestPage/login');
    }
    public function GuestsSignIn_Index(Request $request){
            $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $data = guests::where('guestUsername','=',$request->username)->first();
        if($data){
            if($request->password.'='.$data->guestPassword){
                $request->session()->put('guestUsername',$data->guestUsername);
                return redirect('index');
            }
            else{
                return back()->with('fail','Wrong password!');
            }
        }else{
            return back()->with('fail','This username is not registered.');
        }
    }
}
