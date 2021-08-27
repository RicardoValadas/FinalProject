<?php
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Route;
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


Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('login', function () {
    
})->name('login');

Route::middleware('auth.basic')->get('/user', function (Request $request) {
    return Auth::user();
});
Route::get('/profile', [UserController::class, 'index']);
//Route::get('/home', [MainController::class, 'index']);


require __DIR__ . '/auth.php';
