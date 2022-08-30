<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function adminPieSkinSetsChart(){
        $result = DB::select(DB::raw("select count(skinSet)  as skinCollectionName, skin_sets.skinSetName from skins LEFT JOIN  skin_sets ON skin_sets.skinSetName = skins.skinSet GROUP BY skins.skinSet;"));
        $data = "";
        foreach($result as $val){
            $data.="['".$val->skinSetName."',        ".$val->skinCollectionName."],";
        }
        
        $chartData = $data;
        return view('AdminPage/adminPieSkinSets-Page',compact('chartData'));
    }

    public function adminBarSkinSetsChart(){
        $result = DB::select(DB::raw("select count(gunType)  as gunTypeName, guns.gunID from skins LEFT JOIN  guns ON guns.gunID = skins.gunType GROUP BY skins.gunType;"));
        $data = "";
        foreach($result as $val){
            $data.="['".$val->gunID."',        ".$val->gunTypeName."],";
        }
        
        $chartData = $data;
        return view('AdminPage/adminBarChart-Page',compact('chartData'));
    }

}
