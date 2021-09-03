@extends('layouts.template')

@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ URL::asset('/css/admin/admin.css') }}">
@endsection

@section('content')
<h1 id="pageIdentifier">create user</h1>



<section>
        <h1>create</h1>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('create.in.admin') }}" id="form2" method="post">
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

    @endsection