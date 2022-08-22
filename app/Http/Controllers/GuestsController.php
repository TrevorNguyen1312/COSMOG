<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guests;
use Hash;

class GuestsController extends Controller
{
    public function GuestRegister(){
        return view('GuestPage/register');
    }

    public function GuestRegister_Index(Request $request){
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'password'=>'required',
            'contact'=>'required',
        ]);

        $guest = new guests();
        $guest->guestName = $request->name;
        $guest->guestUsername = $request->username;
        $guest->guestPassword = Hash::make($request->password);
        $guest->guestContact = $request->contact;
        $res = $guest->save();
        if($res){
            return back()->with('success','You have registered successfully !');
        } else{
            return back()->with('fail','Something wrong!');
        }
    }

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
    public function information() {
        return view('GuestPage/information');
    }
}
