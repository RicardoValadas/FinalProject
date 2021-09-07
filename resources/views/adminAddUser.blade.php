@extends('layouts.template')

@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ URL::asset('/css/admin/admin.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/css/edit_profile/editprofile.css') }}">

@endsection

@section('content')
<h1 id="pageIdentifier">create user</h1>



<section id="forma">
        

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="" id="form" method="post">
            @csrf
                <input type="hidden" name="id" value="">

                <label for="username1">username:</label><br>
                <input type="text" id="username1" name="username" placeholder="username" value="" ><br>
                    <span id="u_name"></span><br>

                <label for="first_name1">first name:</label><br>
                <input type="text" id="first_name1" name="first_name" placeholder="first name" value="" ><br>
                    <span id="f_name"></span><br>

                <label for="last_name1">last name:</label><br>
                <input type="text" id="last_name1" name="last_name" placeholder="last name" value=""><br><!--verificar como colocar os nomes junto do old(...-->
                    <span id="l_name"></span><br>

                <label for="email">email:</label><br>
                <input type="email" id="email" name="email" placeholder="email" value=""><br>
                    <span id="e_mail"> </span><br>

                
                <label for="password1">Password:</label><br>
                <input type="password" id="password1" name="password" placeholder="new password" value=""><br>
                    <span id="p_word"> </span><br>

                <label for="password_confirm1">Password Confirm</label><br>
                <input type="password" id="password_confirm1" name="password_confirmation" placeholder="password Confirmation" value=""><br>
                    <span id="p_word"> </span><br>

                <!--<label for="type">type:</label>
                <select name="type" value="type">
                    <option value="child">child</option>
                    <option value="parent">parent</option>
                </select><br>-->
                
                <input type="submit">
        </form>
    </section>

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
                       url: "{{ route('AjaxCreateADM') }}",
                       method: 'post',
                       data:$("form").serialize(),
                   })
                   .done(function(result) {
                       console.log(result);
                       //$('#form').html('<button ><a id="back" href="/profile">back to profile</a></button>');
                       $('h1').html(''+result.success+'');
                       
                    })
                    .fail(function(response) {
                        //let response =result.responseJSON.errors;
                        //console.log(resulterrors)
                        //console.log(response.first_name)
                        //console.log(response.username)
                        
                        let errors = response.responseJSON.errors
                        
                        console.log(errors);
                        
                            if(errors.username){
                            let username = errors.username[0];
                            console.log(username)
                                $('#u_name').html(username);
                            }else{
                                $('#u_name').html('');
                            }
                            
                            if(errors.first_name){
                            let first_name = errors.first_name[0];

                                $('#f_name').html(first_name);
                            }else{
                                $('#f_name').html('');
                            
                            }
                            if(errors.last_name){
                            let last_name = errors.last_name[0];
                                $('#l_name').html(last_name);
                            }else{
                                $('#l_name').html('');
                            
                            }
                            if(errors.email){
                            let e_mail = errors.email[0];
                                $('#e_mail').html(e_mail);
                            }else{
                                $('#e_mail').html('');
                            
                            }
                            if(errors.password){
                            let password = errors.password[0];
                                $('#p_word').html(password);
                            }else{
                                $('#p_word').html('');
                            
                            }

                });
        });
});
</script>
