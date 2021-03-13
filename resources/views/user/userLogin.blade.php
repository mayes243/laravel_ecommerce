@extends('user.layout.userheader')
@section('title','User-Login')
@section('content-section')
<!--Login form -->
<div class="contact-top-agileinfo">
	<div class="container">
<div class="jarallax contact-bottom" id="contact">
	<div class="col-md-12 contact-right-w3l">
		<h3 class="title-w3layouts white-agileits">User Login Form</h3>
	@if(Session::has('error'))
    <div id="message" class="alert alert-success">
    {{Session::get('error')}}
    </div>
    @endif
		<form method="post" action="{{route('userlogin')}}">
			{{csrf_field()}}

			<input type="email" class="name" name="email" placeholder="Enter Your Email" required=""><br>

			<input type="text" style="-webkit-text-security:disc;" class="name" name="password" placeholder="Enter Your password" required="" autocomplete="off"><br>

			<input type="submit" name="submit" value="User Login">
		</form>
	</div>	
</div></div>
	<div class="clearfix"></div>
</div>
<!--End Login form -->
@endsection