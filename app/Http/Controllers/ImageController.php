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

        $images      =       time().'.'.$request->image->extension();

        $request->image->move(public_path('uploads'), $images);

        $images      =       Image::create(["image_name" => $images]);

        if(!is_null($images)) {
            return back()->with('success','Success! avatar image uploaded');
        }

        else {
            return back()->with("failed", "Alert! avatar image not uploaded");
        }
    }
}
