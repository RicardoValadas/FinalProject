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
        return view('user_profile',['users' => $userinfo]);
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
