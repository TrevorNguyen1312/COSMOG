<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginPageController extends Controller
{
    public function adminLoginPageIndex(){
        return view('AdminPage/adminLogin-Page');
    }
    public function adminSignIn_Index(Request $request){
        return view('AdminPage/admin-Page');
        $request->validate([
            'adminUsername'=>'required'
            'adminPassword'=>'required'
        ]);
    }
}
