<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function index()
    {
<<<<<<< Updated upstream
        $users = auth()->user();
        return view('user_profile',['users' => $users]);
=======
<<<<<<< Updated upstream
=======
        //$users = auth()->user();
>>>>>>> Stashed changes
        return view('user_profile');
>>>>>>> Stashed changes
    }
public function userinfo(){

} 





    
}
