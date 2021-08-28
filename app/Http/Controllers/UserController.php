<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $stopOnFirstFailure = true;//added

    public function index()
    {
        //$users = auth()->user();
        //it's a way to store logged in user
        $userinfo =auth()->user();
        return view('user_profile',['user' => $userinfo]);   
    }
    
    public function showdelete(){
        return view('delete');    
    }

    //shows edit page and querys the db for info about the user
    public function editform($id){//I'LL DELETE THE ID SINCE I CAN GET THE LOGGED USER FROM AUTH
        $user = User::find($id);
        return view('editProfile',['user' => $user]);
        }

    //this function will allow the user to edit its account
        public function update(Request $request,$id){
            $user = User::find($id); 
            $error=array();          
            $user->type=$request->type;
            $user->username=$request->username;
            $user->first_name=$request->first_name;
            $user->last_name=$request->last_name;

            if($request->password != $user->password){
                //check if the password are equal          
                if($request->password == $request->pwdConfirm)
                    $user->password= Hash::make($request->password);    //hash and store the pass
                else
                    $error[]='passwords dont match';
            }  
            if($error)
                return $error;
            else{
                $user->save();    
                //return redirect('user_profile',['user' => $user])->with('success', 'user updated'); 
                return view('user_profile',['user' => $user])->with('success', 'user updated');
            }


        }   //e para acabar isto no fim de semana
        
        
        









//to delete user
    public function destroy($id){
        User::destroy($id);
    }       
}
