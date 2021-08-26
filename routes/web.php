<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;


use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});

//Route::get('/home', [MainController::class, 'index']);

require __DIR__ . '/auth.php';


//test route
Route::get('/test', [Controller::class, 'index']);
