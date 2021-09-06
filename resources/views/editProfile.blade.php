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
        <button><a href="/profile">Back to Profile</a></button><br><br>
        <input type="hidden" name="id" value="{{ $user->id }}">
        <input type="text" name="username" placeholder="username" value="{{ $user->username }}"><br><br>
        <input type="text" name="first_name" placeholder="first name" value="{{ $user->first_name }}"><br><br>
        <input type="text" name="last_name" placeholder="last name" value="{{ $user->last_name }}"><br><br>
        <!--verificar como colocar os nomes junto do old(...-->
        <input type="text" name="email" placeholder="email" value="{{ $user->email }}"><br><br>
        <select name="type" value="type"><br><br>
            <option value="child">Child</option>
            <option value="parent">Parent</option>
        </select><br><br>

        <input type="submit">
    </form>

@endsection
