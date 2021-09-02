@extends('layouts.template')
{{-- css for this page --}}
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/quiz/quiz.css') }}">
@endsection

{{-- main content --}}
@section('content')
    <button class="start" type='button'>Start</button>
    <div id="questionsView" class="questionsViewHide">
        <form id="form">
            <p id='question'>Question 1</p>
            <div class="quizActive">
                <input type="radio" name="quiz" id="answer1" name="answer" value="">
                <label for="answer1" class="answer">
                </label>
            </div>

            <div class="quizActive">
                <input type="radio" name="quiz" id="answer2" name="answer" value="">
                <label for="answer2" class="answer2"></label>
            </div>

            <div class="quizActive">
                <input type="radio" name="quiz" id="answer3" name="answer" value="">
                <label for="answer3" class="answer3"></label>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection





{{-- script url --}}
@section('script')
    <script src="{{ URL::asset('js/quiz/quiz.js') }}"></script>
@endsection
