@extends('layouts.template')
    
@section('content')
    <h1>Username Change Page</h1>
    <h3>Previous username: {{ $user->username }};</h3>


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

<input type="hidden" name="id" value="{{auth()->user()->id}}">
<label for="username" id="username" >new username:</label>
    <input type="text" name="username" placeholder="username" value="{{ $user->username }}" ><br>
    <input type="submit">
    </form>

    @endsection
