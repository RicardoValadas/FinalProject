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

    //---------Checks if user is admin to create a button to admin dasboard(if admin) ----------//
    public function adminOrnot($id){//I'LL DELETE THE ID SINCE I CAN GET THE LOGGED USER FROM AUTH ...//nvm
        $user = User::find($id);
        return  $user;
        }

    public function displayAdmin(){
        $allusers = User::all();
        return view('adminPage',['allusers' => $allusers]);
    }

    //---------Display Add Page----------//
    public function add(){
        return view('adminAddUser');
    }
    
    //---------Delete user----------//
    public function destroy($id){
        User::destroy($id);
        return redirect('adminpage');
    }
    //---------Display Edit Page----------//
    public function displayEdit($id){
        $allusers = User::find($id);
        return view('ADMINeditU',['user' => $allusers]);
    }
    
    
    //---------Create new User----------//
    public function create(Request $request){
        $user = new User;
        $user->first_name=strip_tags(str_replace(' ', '',$request->first_name));
        $user->last_name=strip_tags(str_replace(' ', '',$request->last_name));
        $user->username=strip_tags(str_replace(' ', '',$request->username));
        $user->type=$request->type;
        $user->email=$request->email;
        $user->password= Hash::make($request->password); 
        $user->images= 'to add'; 
        $this->validate($request,[
            'username'=> "required|unique:users,username",
            'email'=> "required|email|unique:users,email",
            'first_name'=> 'required|min:3|max:15',
            'last_name'=> 'required|min:3|max:15',
            'password'=> 'required|min:7|confirmed',
            
        ]);
        $user->save();
        return redirect('adminpage');
    }
    
    //---------Update User----------//
    public function update(Request $request,$id){
        $user = User::find($request->id);    
        $user->first_name=strip_tags(str_replace(' ', '',$request->first_name));
        $user->last_name=strip_tags(str_replace(' ', '',$request->last_name));
        $user->username=strip_tags(str_replace(' ', '',$request->username));
        
        if(!filter_var($request->email,FILTER_VALIDATE_EMAIL))
            echo 'not an email';
        else
            $user->email=$request->email;
        
        /*here i stored the validation inside a variable and if the password is empty there will be no validation for the password*/
        $passwordVer= "sometimes|alpha_num|between:6,20|confirmed";
        if(!empty($request->password)){
            $user->password= Hash::make($request->password);
        }else{
            $passwordVer="";
        }
        
        //if(!$request->type == 'nochange')
            //$user->type=$request->type;
        
        $this->validate($request,[
            'username'=> "required|unique:users,username,$id",
            'email'=> "required|email|unique:users,email,$id",
            'first_name'=> 'required|min:3|max:15',
            'last_name'=> 'required|min:3|max:15',
            'password'=>$passwordVer,
        ]);
        $user->save();         
        return redirect('adminpage');   
    } 
    
    //----------------------Not used anymore-----------------------//
    
    public function showusers(){
        $allusers = User::all();
        return $allusers;
        //return $this->users();
    }
    public function users(){
        $allusers = User::all();
        
        foreach ($allusers as $user => $value) {
            echo "username: " . $value['username'] . "|   fName: " .  $value['first_name'] .'| lname:' .  $value['last_name'] . '| EMAIL:' .  $value['email'].'<br>';
        }
    }
    public function displayAdd($id){
        $allusers = User::find($id);
        return view('ADMINeditU',['user' => $allusers]);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    




    
}
