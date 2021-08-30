<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Middleware\Authenticate; # use this illuminate Authenticate in the web.php for the routes



class UserController extends Controller
{


    public function index()
    {
        #$users = auth()->user();
        #it's a way to store logged in user
        $userinfo = array(
            'user'=>auth()->user()
        );
        # Display the user profile
        return view('user_profile',['users' => $userinfo]);
    }

    # Function to use Ajax to edit the user profile
    public function ajaxForm()
    {
        return view("ajax-form");
    }

    public function ajaxAnswer(Request $request)
    {
        // + Validations
        $validations = Validator::make($request->all(), [
            'first_namne' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required',
            'password' => 'required',
        ]);

        # + Upload file
        $fileName = $request->file->getClientOriginalName(); //'randomName.' . $request->file->extension();
        $public_path = public_path('uploads');

        $request->file->move($public_path, $fileName);

        # + Try to insert in the DB
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->photo = $fileName;
        $user->save();

        # Message
        if ($validations->fails())
            return response()->json(['errors' => $validations->errors()->all()]);

        return response()->json(['success' => 'Profile successfully updated']);
    }


    public function showdelete(){
        return view('delete');

    }
    public function editProfile(){
        return view('editProfile');
    }


//this function will allow the user to edit its account
    public function update(Request $resquest){

    }


//to delete user
    public function destroy($id){
        User::destroy($id);
    }














}
