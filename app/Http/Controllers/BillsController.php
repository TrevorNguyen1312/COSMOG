<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bills;

class BillsController extends Controller
{
    public function billsIndex(){
        $data = bills::get();
        return view('bills-List',compact('data'));
    }
}
