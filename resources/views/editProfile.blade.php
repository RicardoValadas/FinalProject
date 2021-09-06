@extends('layouts.template')

@section('content')
    <h3>Edit your profile</h3>


    <button><a href="/profile">Back to Profile</a></button><br><br>
<div id="results"></div>

<div><p>errors</p>
<div id="errors"></div>
</div>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action=""  method="post">
    @csrf
    <input type="hidden" name="id" value="{{$user->id}}">
    
    <label for="username"> Username:</label><br>
    <input type="text" id="username" name="username" placeholder="username" value="{{ $user->username }}" > <br>
    <span id="user_name"></span><br>
    
    <label for="first_name">First Name:</label><br>
    <input type="text" id="first_name" name="first_name" placeholder="first name" value="{{ $user->first_name }}" > <br>
    <span id="f_name"></span><br>
    
    <label for="last_name">Last Name:</label><br>
    <input type="text" id="last_name" name="last_name" placeholder="last name" value="{{ $user->last_name }}"> <br><!--verificar como colocar os nomes junto do old(...-->
    <span id="l_name"></span><br>
    
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" placeholder="email" value="{{ $user->email }}"><br>
    <span id="e_mail"> </span><br>
    
    <input type="submit">
    </form>
@endsection
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>


$(function() {
    $('form').submit(function(e) {
               e.preventDefault();
                   console.log('dos clcike');
                   //console.log('dos clcike');
               $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  },
                       url: "{{ route('ajaxcall') }}",
                       method: 'post',
                       data:$("form").serialize(),
                   })
                   .done(function(result) {
                       console.log('tudo bem');
                      
                    })
                    .fail(function(response) {
                        
                        //let response =result.responseJSON.errors;
                        //console.log(resulterrors)
                        //console.log(response.first_name)
                        //console.log(response.username)
                        console.log(response)
                        let errors = response.responseJSON.errors
                        console.log(errors)
                        console.log(errors.email[0])
                        
                        
                        $('#e_mail').text(errors.email[0])
                        $('#l_name').text(errors.last_name[0])
                        $('#f_name').text(errors.first_name[0])
                        $('#u_name').inner(errors.username[0])
                        

                        


           
                });
        });
});
</script>
