@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/profile/profile.css') }}">
    @endsection

@section('content')
    <h1 id="pageIdentifier">{{ $user->username }}'s Profile</h1>


    <div id="pic">
        <img src="uploads/{{ $user->images}}" width="300px">
    </div>

    <section class="info">
        <p>Score: 420 {{ $user->user_score }} points</p>
        <hr>
        <p>Username: {{ $user->username }} <a href="{{ route('edit.username', [$user->id]) }}">edit</a></p>
        <p>Firstname: {{ $user->first_name }} <a href="{{ route('edit.names', [$user->id]) }}">edit</a></p>
        <p>Lastname: {{ $user->last_name }} <a href="{{ route('edit.names', [$user->id]) }}">edit</a></p>
        <p>Email: {{ $user->email }} <a href="{{ route('edit.email', [$user->id]) }}">edit</a></p><br>
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
