<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function adminPieChart(){
        return view('AdminPage/adminPie-Page');
    }
}
