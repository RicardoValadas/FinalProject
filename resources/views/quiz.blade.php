@extends('layouts.template')
{{-- css for this page --}}
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/quiz/quiz.css') }}">
@endsection

{{-- main content --}}
@section('content')
    <h1>Welcome to the quiz page</h1>

    <div id="quiz">
        <button id="start" type='button'>Start</button>
        <h2>question</h2>
        <div id="questionsView">

            <p id='answers'>Answer 1</p>
        </div>
    </div>

@endsection



{{-- script url --}}
@section('script')
    <script src="{{ URL::asset('js/quiz/quiz.js') }}"></script>
@endsection
