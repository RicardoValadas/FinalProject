@extends('layouts.template')
@section ('style')
<link rel="stylesheet" href="{{URL::asset('/css/contact/contact.css')}}">
@endsection
@section('content')

<div class="se-pre-con"></div>
<section id="contact">
	<div class="sectionheader">	<h1>CONTACT</h1></div>
	<article>
	<p>Our SafeForNet Team will be in touch ASAP! </p>

			<label for="checkcontact" class="contactbutton"><div class="mail"></div></label><input id="checkcontact" type="checkbox">

			<form action="" method="post" class="contactform">
				<p class="input_wrapper"><input type="text" name="contact_nom" value=""  id ="contact_nom"><label for="contact_nom">NAME</label></p>
				<p class="input_wrapper"><input type="text" name="contact_email" value=""  id ="contact_email"><label for="contact_email">EMAIL</label></p>
				<p class="input_wrapper"><input type="text" name="contact_sujet" value=""  id ="contact_sujet"><label for="contact_sujet">SUBJECT</label></p>
				<p class="textarea_wrapper"><textarea name="contact_message" id="contact_message"></textarea></p>
				<p class="submit_wrapper"><input type="submit" value="ENVOYER"></p>
			</form>
	</article>
</section>

{{--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script>

		$(window).load(function() {
			$(".se-pre-con").fadeOut("slow");;
		});

</script>

 --}}

@endsection
