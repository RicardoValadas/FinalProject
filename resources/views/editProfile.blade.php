@extends('layouts.template')

@section('content')
    <h1>home</h1>
    <form action=""method="post">
    @csrf
    <input type="text" name="first_name" placeholder="first name" value="{{ old('first_name')}}"><br>
    <input type="text" name="last_name" placeholder="last name"value="{{ old('last_name')}}"><br>
    <input type="text" name="email" placeholder="email"value="{{ old('name')}}"><br>
    <input type="text" name="password" placeholder="password"><br>
    <input type="submit">
    </form>
    @endsection
