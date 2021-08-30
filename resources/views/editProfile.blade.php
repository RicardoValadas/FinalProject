@extends('layouts.template')
    
@section('content')
    <h1>home</h1>


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
<button><a href="/profile">go back</a></button><br>
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
    <!--i want to use ajax here to check the database to see if the name is valid,mail valid,username valid,etc...
        while doing that i will display the message if valid or not valid...
        while valid border red, if valid border green and a right icon
        while invalid input, the button is disabled.
        if everything ok, return to profile page, and display a message, with orange border saying  update successful
    
        WHATS IS MISSING HERE?
        AJAX CALL TO SEND FORM SERALIZED TO ROUTE/FUNCTION THAT CONNECTS WITH DATABASE.
        INSERT THE USER PREVIEWS VALUES IN THE INPUTS
        THE PASSWORD I GET FROM THE DB, NEEDS TO BE "DEHASHED"
        (SEARCH ON SIMONS GITHUB)

        WHEN I GET HOME
        ORGANIZE MATERIAL NEEDED FOR THIS TASK
        -HASH,INSERT INTO DATABASE ELOQUENT,AND AJAX CALL
    
    




    -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script>/*
             $(function() {
            
             $('form').submit(function(e) {
                e.preventDefault();
                    
                $.ajax({
                        url: "",
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
*/
        </script>



    @endsection
