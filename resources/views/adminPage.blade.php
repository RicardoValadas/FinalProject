@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/admin/admin.css') }}">
@endsection

@section('content')
    <h1 id="pageIdentifier">admin</h1>
    	<h1>Dashboard</h1>

        <section id="functions">
            <button id="showUsers"> display users</button>
            <button> edit users</button>
            <button> add users</button>
            <button> delete users</button>
        </section>
        
        <section class="info">
        <h2><strong>users </strong></h2>
    @foreach ($allusers as $user)

                <h1>{{ $user->username }}   |   {{ $user->first_name }}   |   {{ $user->last_name }}   |
                       {{ $user->email }}     {{ $user->created_at }}    <button id="edit"><a href="{{ route('admineditpage', [$user->id]) }}">edit</a></button> 
                       <button id="delete"><a href="{{ route('ADMdelete.user', [$user->id]) }}">delete</a></button></h1>  
                       
                
                <hr>
            @endforeach
    

            <h1>home</h1>

<section id="addSection">
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
    <input type="password" name="password" placeholder="new password" value="{{ $user->password }}"><br>
    <input type="password" name="password_confirmation" placeholder="password Confirmation" value="{{ $user->password }}"><br>
    <input type="submit">
    </form>
    </section>

  <section id="test">
<p id="dani"></p>
<p></p>  
</section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script>
             $(function() {
            
             $('form').submit(function(e) {
                e.preventDefault();
                    console.log('dos clcike');
                $.ajax({
                        url: "{{ route('update.in.admin',[$user->id]) }}",
                        method: 'post',
                        data:$("form").serialize(),
                    })
                    .done(function(result) {
                        $('#results').html(result);
                        console.log(result);
                })
                .fail(function(result) {
                        console.log('AJAX FAILED');
                    })
                });
             });

             $(document).ready(function() {
                   console.log('second');
               $.ajax({
                       url: "{{ route('getusers') }}",
                       method: 'get',
                       dataType: JSON
                   })
                   .done(function(result) {
                       $('#test').html(result);
                       console.log(result);
                       console.log(result[0]);
                       $('#dani').html(result );

               })
               .fail(function(result) {
                       console.log('AJAX FAILED');
                   })
               });
            


        </script>





















    @yield('script')
    <script src="{{ URL::asset('js/adminjs/admin.js') }}"></script>
@endsection




<?php

//var_dump($allusers);

?>