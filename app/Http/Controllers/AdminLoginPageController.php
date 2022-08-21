<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\administrators;

class AdminLoginPageController extends Controller
{
    public function adminLoginPageIndex(){
        return view('AdminPage/adminLogin-Page');
    }
    public function adminSignIn_Index(Request $request){
            $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $admin = administrators::where('adminUsername','=',$request->username)->first();
        if($admin){
            if($request->password.'='.$admin->adminPassword){
                $request->session()->put('adminUsername',$admin->adminUsername);
                return redirect('admin-Page');
                
            }
            else{
                return back()->with('fail','Wrong password!');
            }
        }else{
            return back()->with('fail','This username is not available.');
        }
    }
}
