<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skin_sets;

class SkinSetsController extends Controller
{
    public function skin_setsIndex(){
        $data = skin_sets::get();
        return view('skin_sets-List',compact('data'));
    }
}
