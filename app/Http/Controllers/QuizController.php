<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Answers;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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

    public function getAnswer()
    {
        $question = Answers::all()->random();

        return $question->toJson(JSON_PRETTY_PRINT);
    }

    public function addScore()
    {
        return view('home');
        /*    $user = User::find(auth()->user()->id);
        $user->user_score = $request->user_score;
        $this->validate($request, [
            'score' => "required",
        ]);
        $user->save(); */

        /* Request $request */
    }
}
