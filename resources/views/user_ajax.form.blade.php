<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
</head>
<body>
    <h3>Edit your profile</h3>

    <!-- ######## Ajax form to edit the user profile ######## -->
    <form id="usForm" method="post" enctype="multipart/form-data" >
        @csrf
        <label for="Edit your profile"> Edit profile : </label>
        <input type="text" name="first_name" placeholder="first name" value="{{ old('first_name')}}"><br>
        <input type="text" name="last_name" placeholder="last name"value="{{ old('last_name')}}"><br>
        <input type="text" name="email" placeholder="email"value="{{ old('name')}}"><br>
        <input type="text" name="password" placeholder="password"><br>
        <label for="usPhoto">Upload a picture : </label>
        <input type="submit">
    </form>

    <!-- ######## script jquery (cdn) needed for ajax ######## -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script>
            /* ######## Waiting for the page to be loaded/ready ######## */
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










</body>
</html>
