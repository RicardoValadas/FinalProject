@extends('layouts.template')

@section('content')
    <h1>home</h1>
    <form action="" method="post">
    @csrf
    <input type="text" name="first_name" placeholder="first name" value="" ><br>
    <input type="text" name="last_name" placeholder="last name" value="{{ old('last_name')}}"><br>
    <input type="text" name="email" placeholder="email" value="{{ old('email')}}"><br>
    <input type="text" name="password" placeholder="password"><br>
    <input type="submit">
    </form>
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        /* Wait for the page to be loaded/ready */
        $(function() {
            e.preventDefault();
            $('form').submit(function(e) {
                e.preventDefault();
                console.log('working');
                $.ajax({
                        url: "{{ route('update.user') }}",
                        method: 'post',
                        data: form.serialize(),

                    })
                    .done(function(result) {
                        // If AJAX call worked
                        console.log(result);
                    })
                    .fail(function(result) {
                        console.log('AJAX FAILED');
                    })
            });
        });
    </script>


    @endsection
