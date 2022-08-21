<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skins;
use App\Models\rarity;
use App\Models\guns;
use App\Models\skin_sets;



class SkinsController extends Controller
{
    public function SkinsIndex(){
        $data = skins::get();
        return view('skins-List',compact('data'));
    }
    public function addSkins(){
        $raritydata = rarity::get();
        $gundata = guns::get();
        $skinsetdata = skin_sets::get();
        return view('add-Skins', compact('raritydata','gundata','skinsetdata'));
    }

    public function saveSkins(Request $request){
        $request->validate([
            'skinid'=>'required',
            'skinname'=>'required',
            'skinrarity'=>'required',
            'skinprice'=>'required',
            'skinset'=>'required',
            'skinimage'=>'required',
            'guntype'=>'required',
        ]);

        $skinID = $request->skinid;
        $skinName = $request->skinname;
        $skinRarity = $request->skinrarity;
        $skinPrice = $request->skinprice;
        $skinSet = $request->skinset;
        $skinImage = $request->skinimage;
        $gunType = $request->guntype;

        $skin = new skins();
        $skin->skinID = $skinID;
        $skin->skinName = $skinName;
        $skin->skinRarity = $skinRarity;
        $skin->skinPrice = $skinPrice;
        $skin->skinSet = $skinSet;
        $skin->skinImage = $skinImage;
        $skin->gunType = $gunType;
        $skin->save();

        return redirect()->back()->with('success','Skin Added Successfully');
    }

    public function editSkins($skinID){
        $data = skins::where('skinID','=', $skinID)->first();
        $raritydata = rarity::get();
        $gundata = guns::get();
        $skinsetdata = skin_sets::get();
        return view('edit-Skins', compact('data','raritydata','gundata','skinsetdata'));
    }

    public function updateSkins(Request $request){
        $request->validate([
            'skinid'=>'required',
            'skinname'=>'required',
            'skinrarity'=>'required',
            'skinprice'=>'required',
            'skinset'=>'required',
            'skinimage'=>'required',
            'guntype'=>'required',
        ]);

        $skinID = $request->skinid;
        $skinName = $request->skinname;
        $skinRarity = $request->skinrarity;
        $skinPrice = $request->skinprice;
        $skinSet = $request->skinset;
        $skinImage = $request->skinimage;
        $gunType = $request->guntype;

        skins::where('skinID','=',$skinID)->update([
            'skinID'=>$skinID,
            'skinName'=>$skinName,
            'skinRarity'=>$skinRarity,
            'skinPrice'=>$skinPrice,
            'skinSet'=>$skinSet,
            'SkinImage'=>$skinImage,
            'gunType'=>$gunType,
        ]);
        return redirect()->back()->with('success','Skin Updated Successfully');
    }
    
    public function deleteSkins($skinID){
        skins::where('skinID','=',$skinID)->delete();
        return redirect()->back()->with('success','Skin Deleted Successfully');
    }
}
