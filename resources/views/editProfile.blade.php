@extends('layouts.template')

@section('content')
    <h1>home</h1>
    <form action=""method="post">
    @csrf
    <input type="text" name="first_name" placeholder="first name" value="{{ old('first_name'}}" ><br>
    <input type="text" name="last_name" placeholder="last name"value="{{ old('last_name'}}"><br>
    <input type="text" name="email" placeholder="email"value="{{ old('name'}}"><br>
    <input type="text" name="password" placeholder="password"><br>
    <input type="submit">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        /* Wait for the page to be loaded/ready */
        $(function() {
            $('#myForm').submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                // Ajax call
                $.ajax({
                        url: "{{ route('submit.ajax.form') }}",
                        //url: 'ajax-answer',
                        method: 'post',
                        data: formData,
                        processData: false,
                        contentType: false
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
