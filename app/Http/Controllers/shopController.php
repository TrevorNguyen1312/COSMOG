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
}
