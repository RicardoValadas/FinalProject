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

    <article class="userinfo">
        <p class="userscore">Score: 420 {{ $user->user_score }} points</p>
        <br>
        <p>Username: {{ $user->username }} </p>
        <p>Firstname: {{ $user->first_name }} </p>
        <p>Lastname: {{ $user->last_name }} </p>
        <p>Email: {{ $user->email }} </p><br>
        <p>admin: {{ $user->admin }} </p><br>
    </article>

    <div class="buttons">
        <ul id="Blist" >
            <li><a href="{{ route('edit.user', [$user->id]) }}">Edit Profile</a></li>
            <li><a href="{{ route('change.password', [$user->id]) }}">Change Password</a></li>
            <li><a href="{{ route('delete.user', [$user->id]) }}">Delete Account</a></li>
            
        </ul>
    </div>



</section>
<!--/////////////////////////////////////////////////////////////////-->
<hr>
<section id="achi">
    <h2>Achievements</h2>
    <div class="buttons">
        <button id="showachi">Show Achievements</button>
    </div>
    <section class="achievments">
        <!-- aqui vai ser necessario fazer clone dos trofeus.... usar ajax e clones....criar js file que contenha tudo-->
        <article class="medal" id="participation">
            <img src="{{ asset('images/participation.png') }}" alt="participation" height="50px">
            <h3> <strong>Participation Medal</strong></h3>
            <p>You played the quiz!</p>
        </article>
        <article class="medal" id="bronze">
            <img src="{{ asset('images/bronze.png') }}" alt="bronze" height="50px">
            <h3> <strong>Bronze Medal</strong></h3>
            <p>You surpassed the 10 points mark!</p>
        </article>
        <article class="medal" id="silver">
            <img src="{{ asset('images/silver.png') }}" alt="silver" height="50px">
            <h3> <strong>Silver</strong></h3>
            <p>Congratulations! You surpassed the 30 points mark!</p>
            <p>You are becoming an expert</p>
        </article>
        <article class="medal" id="gold">
            <img src="{{ asset('images/gold.png') }}" alt="gold" height="50px">
            <h3> <strong>Gold</strong></h3>
            <p>Amazing! You've reached the 50 points mark!</p>
            <p>You are a pro now!</p>
        </article>
    </section>
</section>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
                   //console.log('second');
               $.ajax({
                       url: "{{ route('adminOrnot', [Auth::user()->id]) }}",
                       method: 'get',
                     
                   })
                   .done(function(result) {
                      // $('#test').html(result);
                      console.log(result.admin);
                      let admin =result.admin

                      if (admin===1) {
                        $('#Blist').append("<li id=><a href=" + "{{ route('admin.page')}}" + ">admin dashboard</a></li>");
                        
                      }
               })
               .fail(function(result) {
                       console.log('AJAX FAILED');
                   })
               });
</script>
<script src="{{ URL::asset('js/profile/profile.js') }}"></script>
@endsection
@yield('script')




@section('script')
@endsection