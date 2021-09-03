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


    public function adminOrnot($id){//I'LL DELETE THE ID SINCE I CAN GET THE LOGGED USER FROM AUTH ...//nvm
        $user = User::find($id);
        return  $user;
        }

    public function displayAdmin(){
        $allusers = User::all();
        return view('adminPage',['allusers' => $allusers]);
    }
    public function showusers(){
        
        
        $allusers = User::all();
        
        return $allusers;
        //return $this->users();
    }
    public function add(){
        
        return view('adminAddUser');
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
        
        return redirect('adminpage');
    }
    
    public function displayEdit($id){
        $allusers = User::find($id);
        return view('ADMINeditU',['user' => $allusers]);
    }
    public function displayAdd($id){
        $allusers = User::find($id);
        return view('ADMINeditU',['user' => $allusers]);
    }
    
    public function create(Request $request){
        $user = new User;
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->type=$request->type;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password= Hash::make($request->password); 
        $this->validate($request,[
            'username'=> "required|unique:users,username",
            'email'=> "required|unique:users,email",
            'first_name'=> 'required|min:3|max:15',
            'last_name'=> 'required|min:3|max:15',

        ]);
        $user->save();
        return redirect('adminpage');
    }
    public function update(Request $request,$id){
        $user = User::find($request->id);        
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->type=$request->type;

        $user->password= Hash::make($request->password);    //hash and store the pass
        $this->validate($request,[
            'username'=> "required|unique:users,username,$id",
            'email'=> "required|unique:users,email,$id",
            'first_name'=> 'required|min:3|max:15',
            'last_name'=> 'required|min:3|max:15',

        ]);
        



        $user->save();    
        
   
           
        return redirect('adminpage');
        
        //return $this->displayAdmin();
        
    } 
    
    
    
}
