<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
class AdminController extends Controller
{
    //

    public function displayAdmin(){
        $allusers = User::all();
        return view('adminPage',['allusers' => $allusers]);
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
            'password'=> ['confirmed','min:3','max:60',Password::min(8)
            ->letters(5)
            ->mixedCase(1)
            ->numbers(2)
            ->symbols(1)
            ->uncompromised()],
        ]);
        $user->save();    
        if($user->save())
            return 'change saved';
        //return $this->displayAdmin();
        
    } 
    
    
    
}
