@extends('layouts.template')

@section('style')
<link rel="stylesheet" href="{{ URL::asset('/css/about/about.css') }}">
@endsection

@section('content')

<h1>About us:</h1>
<br>

<section id="aboutUs">

    <article class="card-1">
        <h2>Who are we ?</h2>
        <p>We are a team of junior web developers with a passion for technology.</p>
        <p>Our website was build as our team final project to the CodingJobs course.</p>
    </article>
    <br>

    <article class="card-2">
        <h2>Our goal</h2>
        <p>The idea behind SafeForNet is to help parents and their children understand the risks that come with internet use.</p>
    </article>
    <br>

    <article class="card-3">
        <h2>How we achieve it?</h2>
        <p> We try to achieve exactly that by providing a entertaining and simple way to instruct people via usefull tips and quiz game.</p>
    </article>
    <br>

    <article class="card-4">
        <h2>The team:</h2>
        <p>Danilo Soares</p>
        <p>Ricardo Valadas</p>
        <p>Wildson Alves</p>
        <p>Gabriel Silva</p>
        <p>Diogo Martins</p>
    </article>
    <br>
</section>

<div class="image">
    <img src="https://playingitsafe.org.au/wp-content/uploads/2020/05/ParentsComputer.png" alt="family">
</div>

@endsection