<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //this controller will be used to connect to HOME,ABOUT,CONTACT

    public function home()
    {
        // To display a specific view :
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
    public function welcome()

    {
        return view('welcome');
    }

    public function tutorials()
    {
        return view('tutorials');
    }
}
