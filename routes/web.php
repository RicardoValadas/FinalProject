<?php
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\MainController;
use Illuminate\Auth\Middleware\Authenticate; # use this illuminate Authenticate in the web.php for the routes

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
Route::get('/', [MainController::class, 'home'])->middleware(['auth'])->name('home');


//Contact View
Route::get('/contact', [MainController::class, 'contact'])->middleware(['auth'])->name('contact');

##About View

/*Route::get('/about', function () {
    return view('about');
})->middleware(['MainController'])->name('about');*/

Route::get('/about', [MainController::class, 'about'])->middleware(['auth'])->name('about');


// /Route for the quiz (quiz.blade.php)
Route::get('/quiz', [QuizController::class, 'getQuiz'])->middleware(['auth'])->name('quiz');

//Profile View
Route::get('/profile', [UserController::class, 'index'])->middleware(['auth'])->name('profile');

//test route to test implementations
Route::get('/test', [Controller::class, 'index'])->middleware(['auth'])->name('test');

//to show edit page
Route::get('/editProfile/{id}', [UserController::class, 'editProfile'])->middleware(['auth'])->name('edit.user');
//delete page
Route::get('/deleteProfile/delete/{id}', [UserController::class, 'destroy'])->middleware(['auth'])->name('delete.user');
//Route::get('/home', [MainController::class, 'index']);

//Dashboard Predefined route to change later
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
