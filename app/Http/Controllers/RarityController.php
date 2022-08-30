<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rarity;

class RarityController extends Controller
{
    public function RarityIndex(){
        $data = rarity::get();

        return view('rarity-List',compact('data'));
    }
    public function addRarity(){
        return view('add-Rarity');
    }
    public function saveRarity(Request $request){
        $request->validate([
            'rarityid'=>'required|unique:rarities|max:5',
            'rarityname'=>'required|max:20',
            'rarityicon'=>'required',
        ]);

        $rarityID = $request->rarityid;
        $rarityName = $request->rarityname;
        $rarityIcon= $request->file('rarityicon')->getClientOriginalName();

        $request->file('rarityicon')->move(public_path('img/Rarity'),$rarityIcon);

        $rarities = new rarity();
        $rarities->rarityID = $rarityID;
        $rarities->rarityName = $rarityName;
        $rarities->rarityIcon = $rarityIcon;
        $rarities->save();

        return redirect()->back()->with('success','Rarity Added Successfully');
    }

    public function editRarity($rarityID){
        $data = rarity::where('rarityID','=', $rarityID)->first();
        return view('edit-Rarity',compact('data'));
    }

    public function updateRarity(Request $request){
        $request->validate([
            'rarityid'=>'required|max:5',
            'rarityname'=>'required|max:20',
            'rarityicon'=>'required',
        ]);

        $rarityID = $request->rarityid;
        $rarityName = $request->rarityname;
        $rarityIcon= $request->file('rarityicon')->getClientOriginalName();

        $request->file('rarityicon')->move(public_path('img/Rarity'),$rarityIcon);

        rarity::where('rarityID','=',$rarityID)->update([
            'rarityID'=>$rarityID,
            'rarityName'=>$rarityName,
            'rarityIcon'=>$rarityIcon,
        ]);
        return redirect()->back()->with('success','Rarity Updated Successfully');
    }
    
    public function deleteRarity($rarityID){
        rarity::where('rarityID','=',$rarityID)->delete();
        return redirect()->back()->with('success','Rarity Deleted Successfully');
    }
}
