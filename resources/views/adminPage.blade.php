@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/profile/profile.css') }}">
@endsection

@section('content')
    <h1 id="pageIdentifier">admin</h1>

<h2><strong>users </strong></h2>

    <section class="info">
    @foreach ($allusers as $user)

                <h1>{{ $user->username }}   |   {{ $user->first_name }}   |   {{ $user->last_name }}   |
                       {{ $user->email }}     {{ $user->created_at }}     <a href="{{ route('admineditpage', [$user->id]) }}">edit</a> 
                       <a href="{{ route('ADMdelete.user', [$user->id]) }}">delete</a> </h1>
                
                <hr>
            @endforeach
    
    @yield('script')
    <script src="{{ URL::asset('js/profilejs/profile.js') }}"></script>
@endsection




<?php

var_dump($allusers);

?>