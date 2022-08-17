<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginPageController extends Controller
{
    public function adminLoginPageIndex(){
        return view('AdminPage/adminLogin-Page');
    }
}
