<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('/css/template/main.css') }}">


    {{-- use this in a view if you want to change style in a page that uses this template
        with @section('style')
        link...
        @endsection --}}
    @yield('style')
</head>

<body>
    <header>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class=" nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class=" nav-item"><a class="nav-link" href="{{ route('quiz') }}">Quiz</a></li>
                <li class=" nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>
