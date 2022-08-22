<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function adminPieSkinSetsChart(){
        $result = DB::select(DB::raw("select count(skinSet) as skinCollectionName, skin_sets.skinSetName from bills LEFT JOIN  skin_sets ON skin_sets.skinSetName = bills.skinSet GROUP BY bills.skinSet;"));
        $data = "";
        foreach($result as $val){
            $data.="['".$val->skinSetName."',        ".$val->skinCollectionName."],";
        }
        
        $chartData = $data;
        return view('AdminPage/adminPieSkinSets-Page',compact('chartData'));
    }

}
