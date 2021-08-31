@extends('layouts.template')
{{-- css for this page --}}
@section('style')
<link rel="stylesheet" href="{{ URL::asset('/css/quiz/quiz.css') }}">
@endsection

{{-- main content --}}
@section('content')
<button class="start" type='button'>Start</button>
<div id="questionsView" class="questionsViewHide">
    <form action="">
        <p id='question'>Question 1</p>
        <div class="quizActive">
            <input type="radio" id="answer1" name="answer" value="wrong" checked>
            <label for="answer1">
                <p class="firstAnswer"></p>
            </label>
        </div>

        <div class="quizActive">
            <input type="radio" id="answer3" name="answer" value="wrong">
            <label for="answer2">Mais merda</label>
            <p class="firstAnswer"></p>
        </div>

        <div class="quizActive">
            <input type="radio" id="answer3" name="answer" value="right">
            <label for="answer3">Resposta certa</label>
            <p class="firstAnswer"></p>
        </div>
        <input type="submit" value="Submit">
    </form>
</div>
@endsection





{{-- script url --}}
@section('script')
<script src="{{ URL::asset('js/quiz/quiz.js') }}"></script>
@endsection