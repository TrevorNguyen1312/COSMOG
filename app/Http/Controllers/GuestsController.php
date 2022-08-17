<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guests;

class GuestsController extends Controller
{
    public function GuestsIndex(){
        $data = guests::get();
        return view('guests-List',compact('data'));
    }
}
