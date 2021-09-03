@extends('layouts.template')

@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ URL::asset('/css/admin/admin.css') }}">
@endsection

@section('content')
<h1 id="pageIdentifier">admin</h1>
<h1>Dashboard</h1>

<section id="functions">
    <button id="showUsers"> display users</button>
    <button> edit users</button>
    <button> add users</button>
    <button id="delete"> delete users</button>
</section>

<br><hr><br>

<h2><strong>users </strong></h2>
  <section id="test">
        <p id="dani"></p>
          
        @foreach ($allusers as $user)
        
                    <h1>{{ $user->username }}   |   {{ $user->first_name }}   |   {{ $user->last_name }}   |
                           {{ $user->email }}     {{ $user->created_at }}    <button id="edit"><a href="{{ route('admineditpage', [$user->id]) }}">edit</a></button> 
                           <button id="delete"><a href="{{ route('ADMdelete.user', [$user->id]) }}">delete</a></button></h1>  
                           <hr>
                           @endforeach
</section>
        
<section class="info">
                       
                
    

            <br><hr><br>
<section id="addSection">
<div id="results"></div>
    <form action="" method="post" id="form1">
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
<h1>edit</h1>
<input type="number" name="id" >

    <label for="username">username:</label>
    <input type="text" id="username" name="username" placeholder="username" value="{{ $user->username }}" ><br>
    
    <label for="first_name">first name:</label>
    <input type="text" id="first_name" name="first_name" placeholder="first name" value="{{ $user->first_name }}" ><br>
    
    <label for="last_name">last name:</label>
    <input type="text" id="last_name" name="last_name" placeholder="last name" value="{{ $user->last_name }}"><br><!--verificar como colocar os nomes junto do old(...-->
    
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
                <input type="text" id="last_name1" name="last_name" placeholder="last name" value=""><br><!--verificar como colocar os nomes junto do old(...-->
                
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

    <section id="deleteSection">
        <h1>Delete users</h1>


    </section>



<br><hr><br>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script>

            //ajax for the first form
             $(function() {
            
             $('#form1').submit(function(e) {
                e.preventDefault();
                    console.log('first form');
                $.ajax({
                        url: "{{ route('update.in.admin',[$user->id]) }}",
                        method: 'post',
                        data:$("#form1").serialize(),
                    })
                    .done(function(result) {
                        $('#test').html(result);
                        for (let i = 0; i < result.length; i++) {
                           console.log(result[i].id + '  |  '+ result[i].username + '  |  ' + result[i].first_name +'  |  ' + result[i].last_name +'  |  ' + result[i].email +'  |  ' + result[i].type);
                           $('#test').append('<h1>'+result[i].id + '  |  '+ result[i].username + '  |  ' + result[i].first_name +'  |  ' + result[i].last_name +'  |  ' + result[i].email +'  |  ' + result[i].type+'</h1>');
                            
                        }
                })
                .fail(function(result) {
                        console.log(result.responseJSON.message);
                        let errors = result.responseJSON.message;
                            console.log(result);
                    })
                });
             });
//-----------------------------------------------------//
            //ajax for the second form//
            $(function() {
            
            $('#form2').submit(function(e) {
               e.preventDefault();
                   //console.log('dos clcike');
               $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  },
                       url: "{{ route('create.in.admin') }}",
                       method: 'post',
                       data:$("#form2").serialize(),
                   })
                   .done(function(result) {
                    $('#test').html(result);
                        for (let i = 0; i < result.length; i++) {
                           console.log(result[i].id + '  |  '+ result[i].username + '  |  ' + result[i].first_name +'  |  ' + result[i].last_name +'  |  ' + result[i].email +'  |  ' + result[i].type);
                           $('#test').append('<h1>'+result[i].id + '  |  '+ result[i].username + '  |  ' + result[i].first_name +'  |  ' + result[i].last_name +'  |  ' + result[i].email +'  |  ' + result[i].type+'</h1>');
                        }
                        for (let i = 0; i < result.length; i++) {
                             //console.log(result[i].id + '  |  '+ result[i].username + '  |  ' + result[i].first_name +'  |  ' + result[i].last_name +'  |  ' + result[i].email +'  |  ' + result[i].type);
                             $('#deleteSection').append('<h1>'+result[i].id + '  |  '+ result[i].username + '  |  ' + result[i].first_name +'  |  ' + result[i].last_name +'  |  ' + result[i].email +'  |  ' + result[i].type+'</h1> ');
                             $('#deleteSection').append('<span><a href="/delete/'+result[i].id+'"> Delete</a></span>');
                            }
               })
               .fail(function(result) {
                       console.log('AJAX FAILED');
                   })
               });
            });



  //----------------------------------------------------//      
//when document ready, show all users

             $(document).ready(function() {
                   //console.log('second');
               $.ajax({
                       url: "{{ route('getusers') }}",
                       method: 'get',
                   })
                   .done(function(result) {
                       $('#test').html(result);

                       $('#dani').html(result );
                      // console.log(result.allusers[0].username);
                      console.log(result[0]);
                       let users =result;
                       //console.log(JSON.stringify(users["username"]));
                       //console.log(users);
                      
                       for (let i = 0; i < result.length; i++) {
                           //console.log(result[i].id + '  |  '+ result[i].username + '  |  ' + result[i].first_name +'  |  ' + result[i].last_name +'  |  ' + result[i].email +'  |  ' + result[i].type);
                           $('#test').append('<h1>'+result[i].id + '  |  '+ result[i].username + '  |  ' + result[i].first_name +'  |  ' + result[i].last_name +'  |  ' + result[i].email +'  |  ' + result[i].type+'</h1>');
                        }
                        for (let i = 0; i < result.length; i++) {
                             //console.log(result[i].id + '  |  '+ result[i].username + '  |  ' + result[i].first_name +'  |  ' + result[i].last_name +'  |  ' + result[i].email +'  |  ' + result[i].type);
                             $('#deleteSection').append('<h1>'+result[i].id + '  |  '+ result[i].username + '  |  ' + result[i].first_name +'  |  ' + result[i].last_name +'  |  ' + result[i].email +'  |  ' + result[i].type+'</h1> ');
                             $('#deleteSection').append('<span><a href="/delete/'+result[i].id+'"> Delete</a></span>');
                            }
               })
               .fail(function(result) {
                       console.log('AJAX FAILED');
                   })
               });
               
  //----------------------------------------------------//             
               //delete section
               $('#delete').click(function() {
                     //console.log('second');
                 $.ajax({
                         url: "{{ route('getusers') }}",
                         method: 'get',
                     })
                     .done(function(result) {
                         $('#test').html(result);
  
                         $('#dani').html(result );
                        // console.log(result.allusers[0].username);
                        console.log(result[0]);
                         let users =result;
                         //console.log(JSON.stringify(users["username"]));
                         //console.log(users);
                         for (let i = 0; i < result.length; i++) {
                           //console.log(result[i].id + '  |  '+ result[i].username + '  |  ' + result[i].first_name +'  |  ' + result[i].last_name +'  |  ' + result[i].email +'  |  ' + result[i].type);
                           $('#test').append('<h1>'+result[i].id + '  |  '+ result[i].username + '  |  ' + result[i].first_name +'  |  ' + result[i].last_name +'  |  ' + result[i].email +'  |  ' + result[i].type+'</h1>');
                        }
                         for (let i = 0; i < result.length; i++) {
                             //console.log(result[i].id + '  |  '+ result[i].username + '  |  ' + result[i].first_name +'  |  ' + result[i].last_name +'  |  ' + result[i].email +'  |  ' + result[i].type);
                             $('#deleteSection').append('<h1>'+result[i].id + '  |  '+ result[i].username + '  |  ' + result[i].first_name +'  |  ' + result[i].last_name +'  |  ' + result[i].email +'  |  ' + result[i].type+'</h1> ');
                             $('#deleteSection').append('<span><a href="/delete/'+result[i].id+'"> Delete</a></span>');
                            }

                            
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