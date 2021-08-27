@extends('layouts.template')

@section('content')
    <h1>{{auth()->user()->last_name}}you sure you want to delete your account?</h1>
    <!--
    i would like to add a go back icon that takes the user back if he does not want to delete
-->
<button>DELETE</button>
@endsection
