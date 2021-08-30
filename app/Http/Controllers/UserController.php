<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
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
    public function editform($id){//I'LL DELETE THE ID SINCE I CAN GET THE LOGGED USER FROM AUTH ...//nvm
        $user = User::find($id);
        return view('editProfile',['user' => $user]);
        }

    //this function will allow the user to edit its account
    //-------------------can be improved----------------//
/*need to change... i will create a password only becauseit will always send a new password since is hashed
remove type and password
password will be redirected to the premade reset password*/
        public function update(Request $request,$id){
            $user = User::find($id);        
            $user->type=$request->type;
            $user->username=$request->username;
            $user->first_name=$request->first_name;
            $user->last_name=$request->last_name;
            $user->email=$request->email;
            $user->password= Hash::make($request->password);    //hash and store the pass
            $this->validate($request,[
                'username'=> "required|unique:users,username,$id",
                'email'=> "required|unique:users,email,$id",
                'first_name'=> 'required|min:3|max:15',
                'last_name'=> 'required|min:3|max:15',
                'password'=> ['required','confirmed','min:3','max:60',Password::min(8)
                ->letters(5)
                ->mixedCase(1)
                ->numbers(2)
                ->symbols(1)
                ->uncompromised()],
                ]);
            $user->save();    
            return view('user_profile',['user' => $user])->with('success', 'user updated');
        } 
//to delete user
    public function destroy($id){
        User::destroy($id);
        return view('home');
    }       
}
