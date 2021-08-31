@extends('layouts.template')
    
@section('content')
    <h1>home</h1>


<div id="results"></div>
    <form action="" method="post">
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
    <input type="text" name="username" placeholder="username" value="{{ $user->username }}" ><br>
    <input type="text" name="first_name" placeholder="first name" value="{{ $user->first_name }}" ><br>
    <input type="text" name="last_name" placeholder="last name" value="{{ $user->last_name }}"><br><!--verificar como colocar os nomes junto do old(...-->
    <input type="text" name="email" placeholder="email" value="{{ $user->email }}"><br>
    <select name="type" value="type">
        <option value="child">child</option>
        <option value="parent">parent</option>
    </select><br>
    <input type="password" name="password" placeholder="new password" value=""><br>
    <input type="password" name="password_confirmation" placeholder="password Confirmation" value=""><br>
    <input type="submit">
    </form>
 




    @endsection
