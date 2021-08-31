<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Answers;
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

    public static function getQuestion()
    {
        $question = Questions::all()->random();

        $Answers  = Answers::where('questionId', '=', $question->id)->get();

        $question['Answers'] = $Answers;

        return $question->toJson(JSON_PRETTY_PRINT);
    }
}
