@extends('layouts.template')
@section ('style')
<link rel="stylesheet" href="{{URL::asset('/css/tutorials/tutorials.css')}}">
@endsection

@section('content')
<div>
    <section>
       <h1>How to install a antivirus?</h1>
       
       <img class="contactLogo" src="{{ asset('images/antovirus.jpg') }}" alt="">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit ex assumenda unde! Possimus vel quibusdam sequi velit pariatur dolores, ipsum quod ducimus totam nam, labore repellat itaque delectus recusandae nihil!</p>

    </section>
</div>

@endsection
