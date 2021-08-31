<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    // ---------- [ Upload image ] ---------
    public function uploadImage(Request $request) {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image      =       time().'.'.$request->image->extension();

        $request->image->move(public_path('uploads'), $image);

        $image      =       Image::create(["image_name" => $image]);

        if(!is_null($image)) {
            return back()->with('success','Success! image uploaded');
        }

        else {
            return back()->with("failed", "Alert! image not uploaded");
        }
    }
}
