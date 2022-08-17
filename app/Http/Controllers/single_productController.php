<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class single_productController extends Controller
{
    public function single_product(){
        return view('GuestPage/single-product');
    }
}
