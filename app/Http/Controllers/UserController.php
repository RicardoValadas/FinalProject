<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{


    public function index()
    {
        //$users = auth()->user();
        //it's a way to store logged in user
        $userinfo = array(
            'user'=>auth()->user()
        );
        return view('user_profile',['users' => $userinfo]);   
    }
    
    
    public function showdelete(){
        return view('delete');   
        
    }
    //shows edit page and querys the db for info about the user
    public function editProfile($id){
        $user = User::find($id);
        return view('editProfile',['users' => $user]);
    }

    //this function will allow the user to edit its account
        public function update(Request $resquest){
            User::table('users')
              ->where('id', $resquest->id)
              ->update([
                'first_name' => $resquest->first_name,
                'last_name' => $resquest->last_name,
                'username' => $resquest->username,
                'email' => $resquest->email,
                'password' => $resquest->password]);

                return response()->json(['success' => 'Record is added']);
        }   












//to delete user
    public function destroy($id){
        User::destroy($id);
    }   
  


    
    








    
}
