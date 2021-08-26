<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //this controller will be used to connect to HOME,ABOUT,CONTACT

    public function index()
    {
        //$flowers = DB::select('SELECT * FROM flowers');
        

        // To display a specific view :
        return view('home');
    }




}
