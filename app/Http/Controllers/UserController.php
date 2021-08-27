<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function index()
    {
        $users = auth()->user();
        return view('user_profile',['users' => $users]);
    }
public function userinfo(){

} 





    
}
