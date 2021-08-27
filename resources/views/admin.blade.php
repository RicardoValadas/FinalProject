@extends('layouts.template')

@section('content')
    <h1>Admin Dashboard</h1>
   
foreach ($users as $user) { echo $user->name . "<br>" };


@endsection