<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
class showController extends Controller
{
    //
    public function showPackage(){
        
            $package = Package::all(); 
            return view('home', compact('package'));
        
    }
}
