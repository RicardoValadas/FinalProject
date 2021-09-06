@extends('layouts.template')
@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/edit_profile/editprofile.css') }}">

@endsection
@section('content')
    <h1>home</h1>


<div id="results"></div>
    <form action="" id="form" method="post">
    @csrf

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<input type="hidden" name="id" value="{{$user->id}}">

    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" placeholder="username" value="{{ $user->username }}" ><br>
    
    <label for="username" >First Name:</label><br>
    <input type="text" id="first_name" name="first_name" placeholder="first name" value="{{ $user->first_name }}" ><br>
    
    <label for="username" >Last Name:</label><br>
    <input type="text" id="last_name" name="last_name" placeholder="last name" value="{{ $user->last_name }}"><br><!--verificar como colocar os nomes junto do old(...-->
    
    <label for="username" >Email:</label><br>
    <input type="text" id="email" name="email" placeholder="email" value="{{ $user->email }}"><br>
    
    
    <label for="password" >Password:</label><br>
    <input type="password" name="password" placeholder="new password" value=""><br>
    
    <label for="password_confirmation" >Password Confirmation:</label><br>
    <input type="password" name="password_confirmation" placeholder="password Confirmation" value=""><br>
    
    <!--<label for="type" >Type:</label>
    <select name="type" id="type" >
        <option value="nochange" disabled selected>{{$user->type}}</option>
        <option value="child">child</option>
        <option value="parent">parent</option>
    </select><br>-->

    <input type="submit">
    </form>
 
<h3>Note:</h3>
<p>If Password is empty, nothing will change</p>
<p>Whatever is not modified nothing will change</p>

 @endsection
