<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    //
    function package (){
        return view('package');
    }
    public function createPackage(Request $request){
        
        $incomingFields = $request -> validate([
            'title' =>'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);
        // $incomingFields['image'] = strip_tags($incomingFields['image']);

        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('images', 'public');
        //     $incomingFields['image'] = $imagePath;
        // }
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $incomingFields['image'] = $imagePath;
        }

        Package:: create($incomingFields);
        return redirect('home');
        
    }
    
    
}
