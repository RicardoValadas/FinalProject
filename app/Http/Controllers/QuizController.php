<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\WrongAnswer;
use App\Models\CorrectAnswer;
use Illuminate\Database\Eloquent\Model;

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

    public function getQuestion()
    {
        $question = Questions::all()->random();

        $wrongAnswer  = WrongAnswer::where('questionId', '=', $question->id)->get();

        $correctAnswer  = CorrectAnswer::where('questionId', '=', $question->id)->first();

        $question['wrongAnswer'] = $wrongAnswer;
        $question['correctAnswer'] = $correctAnswer;

        return $question->toJson(JSON_PRETTY_PRINT);
    }
}
