@extends('layouts.template')
{{-- css for this page --}}
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/quiz/quiz.css') }}">
@endsection

{{-- main content --}}
@section('content')
    <h1>Welcome to the quiz page</h1>
    <div id="quiz">
        <div id="questionsView">
            <p>Answer 1</p>
            <p>Answer 2</p>
            <p>Answer 3</p>
            <p>Answer 4</p>
        </div>
    </div>

@endsection



{{-- script url --}}
@section('script')
    <script src="{{ URL::asset('js/quiz/quiz.js') }}"></script>
@endsection
