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
                <button type="submit" value="" class="answer"></button>
                <button type="submit" value="" class="answer2"></button>
                <button type="submit" value="" class="answer3"></button>
            </div>
        </form>
    </div>
@endsection





{{-- script url --}}
@section('script')
    <script src="{{ URL::asset('js/quiz/quiz.js') }}"></script>
@endsection
