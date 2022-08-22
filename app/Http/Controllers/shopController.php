<?php

namespace App\Http\Controllers;
use App\Models\skins;
use App\Models\rarity;
use App\Models\skin_sets;
use App\Models\guns;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function shop(){

        $skindata = skins::get();
        $raritydata = rarity::get();
        $data = DB::table('skins')
        ->join('rarities', 'rarities.rarityID','skins.skinRarity')
        ->select('rarities.*','skins.*')->get();

        return view('GuestPage/shop',compact('raritydata','skindata','data'));
    }
    public function single_product($id) {
        $singleproduct = Skins::where('skinID', '=', $id)->first();
        $raritydata = rarity::get();
        $data = DB::table('skins')
        ->join('rarities', 'rarities.rarityID','skins.skinRarity')
        ->select('rarities.*','skins.*')
        ->where('rarityID', 'LIKE', '%' . $singleproduct->skinRarity . '%')
        ->first();
        return view('GuestPage/single-product', compact('singleproduct','raritydata','data'));
    }
    // public function filter(Request $request){
    //     $skinsetdata = skin_sets::get();
    //     $gundata = guns::get();
    //     $data = DB::table('skins')
    //     ->join('skin_sets', 'skin_sets.skinSetName')
    //     ->join('guns', 'guns.gunID','guns.gunName')
    //     ->select('skins.*', 'skin_sets.skinSetName', 'guns.gunName')->get();
    //     if(!empty($request->skinSet)){
    //         $data = skins::where('skinsetName', 'LIKE', "%" . $request->skinSet . "%")->get();
    //     }
    //     if(!empty($request->gunType)){
    //         $data = skins::where('gunID', 'LIKE', "%" . $request->gunType . "%")->get(); 
    //     }
    //     $data->appends($request->all());
    //     return view('filter', ['skins'=>$data],compact('skinsetdata','gundata'));
    // }
}