<?php

use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\Auth\NewPasswordController;
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
Route::middleware(['auth'])->group(function () {

    ###########  Route for the quiz page (quiz.blade.php in viwes)  ###########
    Route::get('/quiz', [QuizController::class, 'getQuiz'])->name('quiz');

    ###########  Route for the quiz !!!!Test json!!!! page (quiz.blade.php in viwes)  ###########
    Route::get('/quizTest', [QuizController::class, 'getQuestion'])->name('quizTest');

    Route::get('/quizAnswer', [QuizController::class, 'getAnswer'])->name('quizAnswer');

    ###########  Route for Profile page (user_profile.blade.php in Views )  ###########
    Route::get('/profile', [UserController::class, 'index'])->name('profile');

    ###########  test route to test implementations  ###########
    Route::get('/test', [Controller::class, 'index'])->name('test');

    ########### Route to show the edit user page (editProfile.blade.php in Views )  ###########
    Route::get('/editProfile/{id}', [UserController::class, 'editform'])->name('edit.user');
    Route::post('/editProfile/{id}', [UserController::class, 'update']);

    ###########  Route to delete the user profile (delete.blade.php in Views )  ###########
    Route::get('/deleteProfile/delete/{id}', [UserController::class, 'destroy'])->name('delete.user');

    Route::get('/editUsername/{id}', [UserController::class, 'meh'])->name('edit.username');
    Route::post('/editUsername/{id}', [UserController::class, 'updateUsername']);

    Route::get('/editFLname/{id}', [UserController::class, 'firstLastName'])->name('edit.names');
    Route::post('/editFLname/{id}', [UserController::class, 'updateFirstLastName']);

    Route::get('/editEmail/{id}', [UserController::class, 'email'])->name('edit.email');
    Route::post('/editEmail/{id}', [UserController::class, 'updateEmail']);
}); # End of the middleware "auth" group function
Route::get('/change-password/{id}', [ChangePasswordController::class, 'index'])->name('password.reset');
//Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');

# :::::::::::::::::::::::::::::  #################  ::::::::::::::::::::::::::::: #


require __DIR__ . '/auth.php';




Route::get('/adminpage', [AdminController::class, 'displayAdmin'])->name('edit.email');
Route::get('/delete/{id}', [AdminController::class, 'destroy'])->name('ADMdelete.user');

###########  Route for the Home page (home.blade.php in views)  ###########
Route::get('/', [MainController::class, 'home'])->name('home');

###########  Route for the Contact page (contact.blade.php in Views )  ###########
Route::get('/contact', [MainController::class, 'contact'])->name('contact');

########### Route for the About page (about.blade.php in Views )  ###########
Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/admineditpage/{id}', [AdminController::class, 'displayEdit'])->name('admineditpage');
Route::post('/admineditpage/{id}', [AdminController::class, 'update'])->name('update.in.admin');

//CORS
Route::middleware(['cors'])->group(function () {
    Route::post('/quiz', 'Controller@quiz');
});
