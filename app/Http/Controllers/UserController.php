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
        $userinfo = auth()->user();
        return view('user_profile', ['user' => $userinfo]);
    }

    public function showdelete()
    {
        return view('delete');
    }

    //shows edit page and querys the db for info about the user
    public function editform(){//I'LL DELETE THE ID SINCE I CAN GET THE LOGGED USER FROM AUTH ...//nvm
        $user = User::find(auth()->user()->id);
        return view('editProfile',['user' => $user]);
    }
    
    //this function will allow the user to edit its account
    //-------------------can be improved----------------//
    /*need to change... i will create a password only becauseit will always send a new password since is hashed
    remove type and password
    password will be redirected to the premade reset password*/
        public function update(Request $request){
            $user = User::find(auth()->user()->id);
            $id =auth()->user()->id;
            $user->username=strip_tags(str_replace(' ', '',$request->username));
            $user->first_name=strip_tags(str_replace(' ', '',$request->first_name));
            $user->last_name=strip_tags(str_replace(' ', '',$request->last_name));
            $user->email=$request->email;
            $this->validate($request,[
                'username'=> "required|min:3|max:15|unique:users,username,$id",
                'email'=> "required|min:3|email|unique:users,email,$id",
                'first_name'=> 'required|min:3|max:15',
                'last_name'=> 'required|min:3|max:15',
              
                ]);
            $user->save();
    
                if($user->save())
                    return (['success' => 'profile is up to date']);
                    

            
            if ($this->validate->fails())
                return response()->json(['errors' => $this->validate->errors()->all()]);
    
            //return view('user_profile',['user' => $user])->with('success', 'user updated');
        }
    //to delete user
    public function destroy($id){
        User::destroy($id);
        return view('home');
    }
    
    //------------------------------------not used anymore----------------------------------------------------//       
    public function meh(){
        return $this->username();
        }
        private function username(){
            $user = User::find(auth()->user()->id);
            return view('editUsername',['user' => $user]);
            }

        public function email($id){
            $user = User::find($id);
            return view('editEmail',['user' => $user]);
        }
        public function firstLastName($id){
            $user = User::find($id);
            return view('editFLname',['user' => $user]);
        }
        
        public function updateUsername(Request $request,$id){
            $user = User::find(auth()->user()->id);        
            $user->username=$request->username;
            $this->validate($request,[
                'username'=> "required|unique:users,username,$id",
                ]);
            $user->save();    
            return view('user_profile',['user' => $user])->with('success', 'user updated');
            }
        public function updateFirstLastName(Request $request,$id){
            $user = User::find(auth()->user()->id);
            $user->first_name=$request->first_name;
            $user->last_name=$request->last_name;
            $this->validate($request,[
                'first_name'=> 'required|min:3|max:15',
                'last_name'=> 'required|min:3|max:15',
                ]);
            $user->save();    
            return view('user_profile',['user' => $user])->with('success', 'user updated');
            }
        public function updateEmail(Request $request,$id){
            $user = User::find(auth()->user()->id);
            $user->email=$request->email;
            $this->validate($request,[
                'email'=> "required|email|unique:users,email,$id",
                
                ]);
            $user->save();    
            return view('user_profile',['user' => $user])->with('success', 'user updated');
            }
    















}
