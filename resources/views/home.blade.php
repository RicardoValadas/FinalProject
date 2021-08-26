@extends('layouts.template')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HomePage</h1>
    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque obcaecati odit, a culpa, vel excepturi optio est nemo earum omnis molestias eum quaerat delectus dolore, ea ducimus? Facilis, odit dignissimos.</h2>
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
    <p>INFO-------------- Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus numquam vel doloremque in autem officiis corrupti commodi exercitationem, inventore optio sed! Cupiditate numquam assumenda cum veritatis commodi aliquid alias labore!</p>

</body>
</html>
@endsection
