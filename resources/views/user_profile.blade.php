@extends('layouts.template')
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/profile/profile.css') }}">
    <a href=""></a>
@endsection

@section('content')
    <h1>User Profiles</h1>

    @foreach ($users as $user)
        <div>

            <p>id: {{ $user->id }}</p>
            <p>Firstname: {{ $user->first_name }}</p>
            <p>Lastname: {{ $user->last_name }}</p>
            <p>Username: {{ $user->username }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>Score: {{ $user->user_score }}</p>
            <p><a href="{{ route('edit.user', [$user->id]) }}">Edit</a></p>
            <p><a href="{{ route('delete.user', [$user->id]) }}">delete</a></p>
            
        </div>
    @endforeach
@endsection
