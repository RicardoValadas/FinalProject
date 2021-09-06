@extends('layouts.template')

@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ URL::asset('/css/admin/admin.css') }}">
<style>
    #forma{
        font-size: 10px;
        margin-top:15px ;
    }
    #forma label {
        text-transform: uppercase;
        margin-bottom: 3px;
    }
    #forma [type="submit"] {
        margin-top:15px ;
        width: 50%;
    }
    #forma input{
        width: 80%;
        height: 50px;
        font-size: 10px;
        margin-bottom: 13px;
        text-align: center;
        border-radius: 5px;
        border: 1px solid orangered;
    }
    #forma input:hover, #forma input:focus{
        background-color: orangered;
        color: white;
        border: none;
    }
    #forma select{
        margin-bottom: 50px;
    }
    @media only screen and (min-width: 768px) {
    #forma input {
        margin-bottom: 40px;
        width: 50%;
        font-size: 15px;
    }
    #forma label {
        font-size: 20px;
    }
    #forma [type="submit"] {
        margin-top:15px ;
        width: 15%;
    }
    }
    
</style>
@endsection

@section('content')
<h1 id="pageIdentifier">create user</h1>



<section id="forma">
        

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="" id="form2" method="post">
            @csrf
                <input type="hidden" name="id" value="">

                <label for="username1">username:</label><br>
                <input type="text" id="username1" name="username" placeholder="username" value="" ><br>
                
                <label for="first_name1">first name:</label><br>
                <input type="text" id="first_name1" name="first_name" placeholder="first name" value="" ><br>
                
                <label for="last_name1">last name:</label><br>
                <input type="text" id="last_name1" name="last_name" placeholder="last name" value=""><br><!--verificar como colocar os nomes junto do old(...-->
                
                <label for="email">email:</label><br>
                <input type="email" id="email" name="email" placeholder="email" value=""><br>
                
                
                <label for="password1">Password:</label><br>
                <input type="password" id="password1" name="password" placeholder="new password" value=""><br>
                
                <label for="password_confirm1">Password Confirm</label><br>
                <input type="password" id="password_confirm1" name="password_confirmation" placeholder="password Confirmation" value=""><br>
                
                <!--<label for="type">type:</label>
                <select name="type" value="type">
                    <option value="child">child</option>
                    <option value="parent">parent</option>
                </select><br>-->
                
                <input type="submit">
        </form>
    </section>

    @endsection