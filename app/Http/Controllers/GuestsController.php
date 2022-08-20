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
    public function information($id){
        $data = guests::where('guestID','=',$id)->first();
        return view('GuestPage/information', compact('data'));
    }
}
