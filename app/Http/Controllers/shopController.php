<?php

namespace App\Http\Controllers;
use App\Models\skins;
use App\Models\rarity;
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
    public function filter($)
}
