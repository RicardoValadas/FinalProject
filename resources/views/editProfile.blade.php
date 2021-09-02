@extends('layouts.template')

@section('content')
    <h3>Edit your profile</h3>


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
<button><a href="/profile">go back</a></button><br><br>
        <input type="hidden" name="id" value="{{$user->id}}">
        <label for="username">username:</label>
        <input type="text" name="username" placeholder="username" value="{{ $user->username }}" ><br><br>

        <label for="first_name" >first name:</label>
        <input type="text" id="first_name" name="first_name" placeholder="first name" value="{{ $user->first_name }}" ><br><br>

        <label for="last_name" >last name:</label>
        <input type="text" id="last_name" name="last_name" placeholder="last name" value="{{ $user->last_name }}"><br><br><!--verificar como colocar os nomes junto do old(...-->
        
        <label for="email" >email:</label>
        <input type="text" id="email" name="email" placeholder="email" value="{{ $user->email }}"><br><br>
        
        <input type="submit">
    </form>

@endsection
