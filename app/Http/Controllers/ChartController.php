<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function adminPieSkinSetsChart(){
        return view('AdminPage/adminPieSkinSets-Page');
    }

    public function adminPieGunTypeChart(){
        return view('AdminPage/adminPieGunType-Page');
    }
}
