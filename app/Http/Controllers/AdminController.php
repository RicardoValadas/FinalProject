<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
class AdminController extends Controller
{
    //



    //




    public function displayAdmin(){
        $allusers = User::all();
        return view('adminPage',['allusers' => $allusers]);
    }
    public function showusers(){
        
        
        
        return $this->users();
        
        
    }
    
    public function users(){
        $allusers = User::all();

    foreach ($allusers as $user => $value) {
        echo "username: " . $value['username'] . "|   fName: " .  $value['first_name'] .'| lname:' .  $value['last_name'] . '| EMAIL:' .  $value['email'].'<br>';
    }
    }

    
    public function destroy($id){
        User::destroy($id);
        $allusers = User::all();
        return view('adminPage',['allusers' => $allusers]);
    }
    
    public function displayEdit($id){
        $allusers = User::find($id);
        return view('ADMINeditU',['user' => $allusers]);
    }
    
    public function create(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->type=$request->type;
        $user->username=$request->username;
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->email=$request->email;
        $user->password= Hash::make($request->password); 
        $user->save();
    }
    public function update(Request $request,$id){
        $user = User::find($id);        
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->type=$request->type;
        $user->images='1630565986.jpg';
        $user->created_at='2021-09-02 13:25:54';
        $user->updated_at='2021-09-02 13:25:54';
        $user->password= Hash::make($request->password);    //hash and store the pass
        $this->validate($request,[
            'username'=> "required|unique:users,username,$id",
            'email'=> "required|unique:users,email,$id",
            'first_name'=> 'required|min:3|max:15',
            'last_name'=> 'required|min:3|max:15',

        ]);
        $user->save();    
        
        if($user->save())
            return $this->users();
        //return $this->displayAdmin();
        
    } 
    
    
    
}
