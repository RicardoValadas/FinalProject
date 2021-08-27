<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    # function to get quiz page
    public function getQuiz()
    {
        # if statement
        /*if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {

            # The user is being remembered...
        }*/
        return view('quiz');
    }
}
