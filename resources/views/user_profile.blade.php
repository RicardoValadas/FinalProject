@extends('layouts.template')
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/profile/profile.css') }}">
@endsection

@section('content')
    <h1>User Profiles</h1>
    <div id="pic">
        <img src="{{ asset('img/Profileex.png') }}" height="300px">
    </div>

    <section class="info">
        <p>Score: {{ $user->user_score }}</p>
        <p>Firstname: {{ $user->first_name }}</p>
        <p>Lastname: {{ $user->last_name }}</p>
        <p>Username: {{ $user->username }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>acc type: {{ $user->type }}</p>
        <a href="{{ route('edit.user', [$user->id]) }}">Edit Profile</a>
        <a href="{{ route('passchange') }}">Change Password</a>
        <a href="{{ route('delete.user', [$user->id]) }}">delete account</a>

    </section>
    <!--/////////////////////////////////////////////////////////////////-->
    <hr>
    <section id="achi">
        <button id="buttonAchieve">Achievements</button>

        <section id="achieveSection" class="achieveHidden">
            <!-- aqui vai ser necessario fazer clone dos trofeus.... usar ajax e clones....criar js file que contenha tudo-->
            <article>
                <img src="" alt="" height="130px">
                <h7> <strong> Ran achievment</strong></h7>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, in.</p>
            </article>
            <article>
                <img src="" alt="" height="130px">
                <h7> <strong> Ran achievment</strong></h7>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, in.</p>
            </article>
            <article>
                <img src="" alt="" height="130px">
                <h7> <strong> Ran achievment</strong></h7>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, in.</p>
            </article>
            <article>
                <img src="" alt="" height="130px">
                <h7> <strong> Ran achievment</strong></h7>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, in.</p>
            </article>

        </section>
    </section>
@endsection
@section('script')
    <script src="{{ URL::asset('js/profile/profile.js') }}"></script>
@endsection
