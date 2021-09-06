@extends('layouts.template')
{{-- css for this page --}}
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/quiz/quiz.css') }}">
@endsection

{{-- main content --}}
@section('content')
    <button class="start" type='button'>Start</button>
    <div id="questionsView" class="questionsViewHide">

        <h2 id='question'>Question 1</h2>
        <div class="quizActive">
            <button value="" class="answer"></button>
            <button value="" class="answer2"></button>
            <button value="" class="answer3"></button>
        </div>

    </div>
    <div id="restartContainer">
        <button id="restart" class="restart">Restart</button>
    </div>
    <div class="userScore">
        <h2>Score</h2>
        <p class="score">0</p>
        <form action="{{ route('quiz') }} " method="post">
            @csrf
            <input type="hidden" id="hiddenScore" name="score" value="">
            <input type="submit" id="submit" class="hide" value="Submit Score">
        </form>
    </div>
@endsection

{{-- script url --}}
@section('script')
    <script src="{{ URL::asset('js/quiz/quiz.js') }}"></script>
@endsection
