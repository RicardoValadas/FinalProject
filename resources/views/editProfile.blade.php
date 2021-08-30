@extends('layouts.template')

@section('content')
    <h3>Edit your profile</h3>


<div id="results"></div>
    <form action="" method="post">
    @csrf

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<button><a href="/profile">go back</a></button><br>
<input type="hidden" name="id" value="{{$user->id}}">
    <input type="text" name="username" placeholder="username" value="{{ $user->username }}" ><br>
    <input type="text" name="first_name" placeholder="first name" value="{{ $user->first_name }}" ><br>
    <input type="text" name="last_name" placeholder="last name" value="{{ $user->last_name }}"><br><!--verificar como colocar os nomes junto do old(...-->
    <input type="text" name="email" placeholder="email" value="{{ $user->email }}"><br>
    <select name="type" value="type">
        <option value="child">child</option>
        <option value="parent">parent</option>
    </select><br>
    <input type="password" name="password" placeholder="new password" value="{{ $user->password }}"><br>
    <input type="password" name="password_confirmation" placeholder="password Confirmation" value="{{ $user->password }}"><br>
    <input type="submit">
    </form>

    {{}} ######## Waiting for the page to be loaded/ready ######## */
            $(function() {
            $('#usForm').submit(function(e){
                e.preventDefault();
                let formData = new FormData(this);

                /* # Ajax call # */
                $.ajax({
                        url: "{{ route('submit.ajax.form') }}",
                        /* # url: 'ajax-answer' # */
                        method: 'post',
                        data: formData,
                        processData: false,
                        contentType: false
                    })
                    .done(function(result) {
                         /* # If AJAX call worked # */
                        console.log(result);
                    })
                    .fail(function(result) {
                        console.log('AJAX FAILED');
                    })
                });

            });
        </script>


    @endsection
