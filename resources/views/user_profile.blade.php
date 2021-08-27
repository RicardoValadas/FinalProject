@extends('layouts.template')
@section('style')
    <link rel="stylesheet" href="resources/css/profile/profile.css">
    <a href=""></a>
@endsection

@section('content')
    <h1>User Profiles</h1>


    <?php

use Psy\Command\EditCommand;
use Symfony\Component\VarDumper\VarDumper;


    ?>
@foreach($users as $user)
    <div>
        
            <p>id: {{ $user->id }}</p>
            <p>Firstname: {{ $user->first_name }}</p>
            <p>Lastname: {{ $user->last_name }}</p>
            <p>Username: {{ $user->username }}</p>
			<p>Email: {{ $user->email }}</p>
			<p>Score: {{ $user->user_score }}</p>
            <p><a href="">Edit</a></p>
            <p><a href="">delete</a></p>
        
    </div>
    @endforeach
@endsection
