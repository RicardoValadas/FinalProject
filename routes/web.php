<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangePasswordController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Auth\NewPasswordController;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Auth\Middleware\Authenticate; # use this illuminate Authenticate in the web.php for the routes
use Illuminate\Http\Request;
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



    ###########  Route for the home page (home.blade.php in viwes)  ###########
    Route::get('/home', [MainController::class, 'home'])->name('home');

    ###########  Route for the quiz page (quiz.blade.php in viwes)  ###########
    Route::get('/quiz', [QuizController::class, 'getQuiz'])->name('quiz');

    ###########  Route for the quiz !!!!Test json!!!! page (quiz.blade.php in viwes)  ###########
    Route::get('/quizTest', [QuizController::class, 'getQuestion'])->name('quizTest');

    Route::get('/quizAnswer', [QuizController::class, 'getAnswer'])->name('quizAnswer');

    ###########  Route for Profile page (user_profile.blade.php in Views )  ###########
    Route::get('/profile ', [UserController::class, 'index'])->name('profile');

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

# :::::::::::::::::::::::::::::  #################  ::::::::::::::::::::::::::::: #
Route::get('/change-password', [ChangePasswordController::class, 'index'])->name('password.reset');
Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');



require __DIR__ . '/auth.php';



###########  Route for User Avatar uploading image during the register process  ###########
Route::post('image/upload', [MainController::class, 'uploadImage']);


###########  Route for the Home page (home.blade.php in views)  ###########
Route::get('/', [MainController::class, 'welcome'])->name('welcome');



########### Route for the About page (about.blade.php in Views )  ###########
Route::get('/about', [MainController::class, 'about'])->name('about');

###########  Route for the Contact page (contact.blade.php in Views )  ###########
Route::get('/contact', [MainController::class, 'contact'])->name('contact');





###########                 Admin Routes                           ###########

//display page
Route::get('/adminpage', [AdminController::class, 'displayAdmin'])->name('admin.page');

//delete users on admin dashboard
Route::get('/delete/{id}', [AdminController::class, 'destroy'])->name('ADMdelete.user');

Route::get('/admineditpage/{id}', [AdminController::class, 'displayEdit'])->name('admineditpage');

Route::post('/admineditpage/{id}', [AdminController::class, 'update'])->name('update.in.admin');


//Route::get('/admineditpage/{id}', [AdminController::class, 'displayEdit'])->name('admineditpage');
Route::post('/admineditpage/{id}', [AdminController::class, 'update'])->name('update.in.admin');
Route::get('/displayusers', [AdminController::class, 'showusers'])->name('getusers');

###################################################################################################

//CORS
Route::middleware(['cors'])->group(function () {
    Route::post('/quiz', [QuizController::class, 'getQuiz']);
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


//reset
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');
