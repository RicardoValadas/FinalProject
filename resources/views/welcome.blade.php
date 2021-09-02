@extends('layouts.template')

{{-- css for this page --}}
@section('style')
<link rel="stylesheet" href="{{ URL::asset('/css/welcome/welcome.css') }}">
@endsection

@section('content')

<section class="welcomePage">
    <div class="image">
        <img class="logo" src="{{ asset('images/logo.png') }}" alt="">
    </div>
    <div id=welcome>
        <h1>WELCOME !</h1>
    </div>

    <div class="buttons">
        <a class="login" href="login">Login</a>
        <a class="register" href="register">Register</a>
    </div>

</section>
@endsection