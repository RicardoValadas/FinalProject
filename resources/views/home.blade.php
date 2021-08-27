@extends('layouts.template')
@section('content')
    <h1>home</h1>

@endsection
<?php
$user = auth()->user();
print_r($user->username);

?>
@foreach ($users as $user)
        
        <p><strong>Updated at : </strong> </p>

        <hr>
        @endforeach