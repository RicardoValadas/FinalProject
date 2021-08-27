@extends('layouts.template')

@section('content')
    <h1>home</h1>
    <form action=""method="post">
    <input type="text" name="first_name" placeholder="first name" value="{{ old('name', auth()->user()->first_name) }}" ><br>
    <input type="text" name="last_name" placeholder="last name"value="{{ old('name', auth()->user()->last_name) }}"><br>
    <input type="text" name="email" placeholder="email"value="{{ old('name', auth()->user()->email) }}"><br>
    <input type="text" name="password" placeholder="password"><br>
    <input type="submit">
    </form>

<?php

?>

    @endsection
