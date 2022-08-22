<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\guests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function login(){
        return view('GuestPage/login');
    }
    public function guestSignIn_Index(Request $request){
            $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $data = guests::where('guestUsername','=',$request->username)->first();
        if($data){  
            if(Hash::check($request->password, $data->guestPassword)){
            $request->session()->put('guestUsername',$data->guestName);
            return redirect('/');
            }
            else{
                return back()->with('fail','Wrong password!');
            }
        }else{
                return back()->with('fail','This username is not available.');
            }
        
    }
    public function logout(){
        if(Session::has('guestUsername')){
            Session::pull('guestUsername');
            return redirect('/');
        }
    }
}

