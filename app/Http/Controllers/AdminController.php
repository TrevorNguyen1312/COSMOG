<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\administrators;

class AdminController extends Controller
{
    public function AdminIndex(){
        $data = administrators::get();
        return view('admin-List',compact('data'));
    }
}
