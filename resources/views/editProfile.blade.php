@extends('layouts.template')

@section('content')
    <h1>home</h1>
    <form action=""method="post">
    <input type="text" name="first_name" placeholder="first name">
    <input type="text" name="last_name" placeholder="last name">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="password" placeholder="password">
    <input type="submit">
    </form>
@endsection