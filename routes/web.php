<?php
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\MainController;
use Illuminate\Auth\Middleware\Authenticate; # use this illuminate Authenticate in the web.php for the routes

#use App\Http\Middleware\IsAdminMiddleware;
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

########### Route with all the Middlewares Auth using the group function  ###########
Route::middleware(['auth'])->group(function() {

    ###########  Route for the Home page (home.blade.php in views)  ###########
Route::get('/', [MainController::class, 'home'])->name('home');

###########  Route for the Contact page (contact.blade.php in Views )  ###########
Route::get('/contact', [MainController::class, 'contact'])->name('contact');

########### Route for the About page (about.blade.php in Views )  ###########
Route::get('/about', [MainController::class, 'about'])->name('about');

###########  Route for the quiz page (quiz.blade.php in viwes)  ###########
Route::get('/quiz', [QuizController::class, 'getQuiz'])->name('quiz');

###########  Route for Profile page (user_profile.blade.php in Views )  ###########
Route::get('/profile', [UserController::class, 'index'])->name('profile');

###########  test route to test implementations  ###########
Route::get('/test', [Controller::class, 'index'])->name('test');

//to show edit page
//Route::get('/editProfile/{id}', [UserController::class, 'editProfile'])->name('edit.user');//needs work 
//Route::post('/ajaxeditProfile', [UserController::class, 'update'])->name('update.user');//needs work

Route::get('/editProfile/{id}', [UserController::class, 'editform'])->name('edit.user');
// When we submit the form
Route::post('/editProfile/{id}', [UserController::class, 'update']);






























//delete page
Route::get('/deleteProfile/delete/{id}', [UserController::class, 'destroy'])->name('delete.user');

//Route::get('/home', [MainController::class, 'index']);


//Dashboard Predefined route to change later
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
