<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guns;


class ModelGunsController extends Controller
{
    public function index(){
        $data = guns::get();
        return view('guns-List',compact('data'));
    }
    public function addGuns(){
        return view('add-Guns');
    }
    public function saveGun(Request $request){
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'icon'=>'required',
        ]);

        $gunID = $request->id;
        $name = $request->name;
        $icon = $request->icon;

        $gun = new guns();
        $gun->gunID = $gunID;
        $gun->gunName = $name;
        $gun->gunIcon = $icon;
        $gun->save();

        return redirect()->back()->with('success','Gun Added Successfully');
    }

    public function editGuns($gunID){
        $data = guns::where('gunID','=', $gunID)->first();
        return view('edit-Guns',compact('data'));
    }

    public function updateGuns(Request $request){
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'icon'=>'required',
        ]);

        $gunID = $request->id;
        $gunName = $request->name;
        $gunIcon = $request->icon;

        guns::where('gunID','=',$gunID)->update([
            'gunID'=>$gunID,
            'gunName'=>$gunName,
            'gunIcon'=>$gunIcon
        ]);
        return redirect()->back()->with('success','Gun Updated Successfully');
    }
    
    public function deleteGuns($gunID){
        guns::where('gunID','=',$gunID)->delete();
        return redirect()->back()->with('success','Gun Deleted Successfully');
    }
}
