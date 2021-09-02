@extends('layouts.template')

@section('style')
<link rel="stylesheet" href="{{ URL::asset('/css/profile/profile.css') }}">
@endsection

@section('content')
<h1 id="pageIdentifier">{{ $user->username }}'s Profile</h1>


<div id="pic">
    {{-- This link the user image avatar with the user profile and display it --}}
    <img src="uploads/{{ $user->images}}" width="300px">
</div>

<section class="info">
    <p>Score: 420 {{ $user->user_score }} points</p>
    <br>

    <article class="editable">
        <p>Username: {{ $user->username }} <a class="edit" href="{{ route('edit.username', [$user->id]) }}">Edit</a></p>
        <p>Firstname: {{ $user->first_name }} <a class="edit" href="{{ route('edit.names', [$user->id]) }}">Edit</a></p>
        <p>Lastname: {{ $user->last_name }} <a class="edit" href="{{ route('edit.names', [$user->id]) }}">Edit</a></p>
        <p>Email: {{ $user->email }} <a class="edit" href="{{ route('edit.email', [$user->id]) }}">Edit</a></p><br>
    </article>

    <ul>
        <li><a href="{{ route('edit.user', [$user->id]) }}">Edit Profile</a></li>
        <li><a href="{{ route('change.password', [$user->id]) }}">Change Password</a></li>
        <li><a href="{{ route('admineditpage', [$user->id]) }}">delete account</a></li>
    </ul>
</section>

<!--/////////////////////////////////////////////////////////////////-->
<hr>
<section id="achi">
    <h2>Achievments</h2>
    <button id="showachi">show achievments</button>
    <section class="achievments">
        <!-- aqui vai ser necessario fazer clone dos trofeus.... usar ajax e clones....criar js file que contenha tudo-->
        <article>
            <img src="{{ asset('img/Profileex.png') }}" alt="imagem" height="50px">
            <h7> <strong> Ran achievment</strong></h7>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, in.</p>
        </article>
    </section>
</section>

@yield('script')
<script src="{{ URL::asset('js/profilejs/profile.js') }}"></script>
@endsection

@section('script')
<script src="{{ URL::asset('js/profile/profile.js') }}"></script>
@endsection