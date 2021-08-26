<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// /Route for the quiz (quiz.blade.php)
Route::get('/quiz', [QuizController::class,'getQuiz']);





Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/profile', [UserController::class, 'index']);
//Route::get('/home', [MainController::class, 'index']);


require __DIR__ . '/auth.php';
