<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
        $data = administrators::where('adminUsername','=',$request->username)->first();
        if($data){
            if($request->password.'='.$data->adminPassword){
                $request->session()->put('adminUsername',$data->adminUsername);
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
