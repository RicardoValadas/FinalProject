<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{

    public function index() {
        return view('profile');
    }

    ## ---------- [ Upload image ] --------- ##
    public function uploadImage(Request $request) {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image      =       time().'.'.$request->image->extension();

        $request->image->move(public_path('uploads'), $image);

        $image      =       Image::create(["image_name" => $image]);

        if(!is_null($image)) {
            return back()->with('success','Success! avatar image uploaded');
        }

        else {
            return back()->with("failed", "Alert! avatar image not uploaded");
        }
    }
}
