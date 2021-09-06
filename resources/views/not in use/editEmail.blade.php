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
    <input type="text" name="email" placeholder="email" value="{{ $user->email }}"><br>
    <input type="submit">
    </form>
    

    @endsection
