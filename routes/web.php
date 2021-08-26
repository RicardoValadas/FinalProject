<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\MainController;

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

//Home View
Route::get('/', [MainController::class, 'home'])->name('home');

//Contact View
Route::get('/contact', [MainController::class, 'contact'])->name('contact');

//About View
Route::get('/about', [MainController::class, 'about'])->name('about');

// /Route for the quiz (quiz.blade.php)
Route::get('/quiz', [QuizController::class, 'getQuiz'])->name('quiz');

//Profile View
Route::get('/profile', [UserController::class, 'index'])->name('profile');

//test route to test implementations
Route::get('/test', [Controller::class, 'index'])->name('test');


//Dashboard Predefined route to change later
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
