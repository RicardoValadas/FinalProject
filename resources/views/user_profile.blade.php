@extends('layouts.template')
@section('style')
    <link rel="stylesheet" href="resources/css/profile/profile.css">
    <a href=""></a>
@endsection

@section('content')
    <h1>User Profiles</h1>


    <?php

use Psy\Command\EditCommand;
use Symfony\Component\VarDumper\VarDumper;

$users = auth()->user();
    //Var_Dump($users);
    echo auth()->user()->username .'<br>';
    echo auth()->user()->first_name .'<br>';
    echo auth()->user()->last_name .'<br>';
    echo auth()->user()->email .'<br>';
    echo auth()->user()->password .'<br>';
    echo '<a href="">EditCommand</a>'
    ?>
@endsection
