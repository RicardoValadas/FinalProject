@extends('layouts.template')

@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ URL::asset('/css/admin/admin.css') }}">
@endsection

@section('content')



<!--<section id="functions">
    <button id="showUsers"> display users</button>
    <button id="editUsers"> edit users</button>
    <button id="addUsers" > add users</button>
    <button id="delete"> delete users</button>
     <a href="{{ route('adduser') }}">add users</a>
</section>-->

<h2><strong>Admin Dashboard </strong></h2>
<br><hr><br>
<h2><strong>List of users: </strong></h2>
<section class="table-responsive">    
    <table >
         <tr>
            <th>id</th>
            <th>Username</th>
            <th>first_name</th>
            <th>Last Name</th>
            <th>email</th>
            <th>created_at</th>
            <th>edit</th>
            <th>delete</th>
         </tr>
         @foreach ($allusers as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            <td  class="tableLinks"> <a href="{{ route('admineditpage', [$user->id]) }}">edit</a></td>
            <td class="tableLinks" ><a href="{{ route('ADMdelete.user', [$user->id]) }}">delete</a></td>
       
        </tr>
        @endforeach
      </table>
    <a id="link" href="{{ route('adduser') }}">Add New Users</a>




    <section class="info">
            <br><hr><br>

<!--
<input type="number" name="id" >

    <label for="username">username:</label>
    <input type="text" id="username" name="username" placeholder="username" value="{{ $user->username }}" ><br>
    
    <label for="first_name">first name:</label>
    <input type="text" id="first_name" name="first_name" placeholder="first name" value="{{ $user->first_name }}" ><br>
    
    <label for="last_name">last name:</label>
    <input type="text" id="last_name" name="last_name" placeholder="last name" value="{{ $user->last_name }}"><br>
    
    <label for="email">email:</label>
    <input type="text" id="email" name="email" placeholder="email" value="{{ $user->email }}"><br>
    
    <label for="type">type:</label>
    <select name="type" value="type">
        <option value="child">child</option>
        <option value="parent">parent</option>
    </select><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="new password" value="{{ $user->password }}"><br>
    
    <label for="password_confirm">Password Confirm</label>
    <input type="password" id="password_confirm" name="password_confirmation" placeholder="password Confirmation" value="{{ $user->password }}"><br>
    
    
    <input type="submit">
    </form>
    </section>

<br><hr><br>

    <section>
        <h1>create</h1>

        <form action="" id="form2" method="post">
        @csrf
                <input type="hidden" name="id" value="">

                <label for="username1">username:</label>
                <input type="text" id="username1" name="username" placeholder="username" value="" ><br>
                
                <label for="first_name1">first name:</label>
                <input type="text" id="first_name1" name="first_name" placeholder="first name" value="" ><br>
                
                <label for="last_name1">last name:</label>
                <input type="text" id="last_name1" name="last_name" placeholder="last name" value=""><br>
                
                <label for="email1">email:</label>
                <input type="text" id="email1" name="email" placeholder="email" value=""><br>
                
                <label for="type">type:</label>
                <select name="type" value="type">
                    <option value="child">child</option>
                    <option value="parent">parent</option>
                </select><br>
                
                <label for="password1">Password:</label>
                <input type="password" id="password1" name="password" placeholder="new password" value=""><br>
                
                <label for="password_confirm1">Password Confirm</label>
                <input type="password" id="password_confirm1" name="password_confirmation" placeholder="password Confirmation" value=""><br>
                
                
                <input type="submit">
        </form>
    </section>
    -->
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script>
/*

               </script>

    @yield('script')
    <script src="{{ URL::asset('js/adminjs/admin.js') }}"></script>
@endsection




<?php

//var_dump($allusers);

?>