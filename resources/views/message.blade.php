@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/profile/profile.css') }}">
          <style>  .box{
            border: 1px solid gray;
            padding: 20px;
            font-size: 20px;
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')

   
    @foreach ($messages as $comment)
    <div class="box">

        <p>{{$comment->user_id}} {{$comment->use_id}} {{$comment->message}} </p>
    </div>

    
    
    @endforeach
    <div id="meh"></div>
    
<div></div>



    <form action="{{ route('postMessage') }}" method="POST" >
        @csrf
        <label for="message">message:</label>
        <input type="text" id="message" name="message" placeholder="insert here a message">
            <input type="submit" value="post">
    </form>

    @endsection
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>

$(document).ready(function() {
        //console.log('second');
        $.ajax({
                url: "{{ route('getMessages') }}",
                method: 'get',

            })
            .done(function(result) {
                // $('#test').html(result);
                console.log(result.length);
                for (let index = 0; index < result.length; index++) {
                    const element = result[index].message;
                    $('#meh').append(element);
                }
                
            })
            .fail(function(result) {
                console.log('AJAX FAILED'.result);
            })
    });

//--------------//
$(function() {
    $('form').submit(function(e) {
               e.preventDefault(e);
                   console.log('dos clcike');
                   let newMessage =$('#userInput').val();
                   
                   $.ajax({
                       headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  },
                       url: "{{ route('postMessage') }}",
                       method: 'post',
                       data:$("form").serialize(),
                    })
                    .done(function(result) {
                        console.log('success'+result);
                        $('.box').append('<div class="box">'+ newMessage +'</div>');
                       
                    })
                    .fail(function(response) {
 
                        let errors = response.responseJSON.errors
                        
                        console.log(errors);
                        


                });
        });
});
</script>
@yield('script')




@section('script')
    <script src="{{ URL::asset('js/profile/profile.js') }}"></script>

@endsection