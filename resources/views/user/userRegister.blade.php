@extends('user.layout.userheader')
@section('title','User-Register')
@section('content-section')
<!--Gallery -->
<div class="contact-top-agileinfo">
	<div class="container">
<div class="jarallax contact-bottom" id="contact">
	<div class="col-md-12 contact-right-w3l">
		<h3 class="title-w3layouts white-agileits">USer Register Form</h3>
	@if(Session::has('msg'))
    <div id="message" class="alert alert-success">
    {{Session::get('msg')}}
    </div>
    @endif
		<form method="post" action="{{route('userstore')}}" enctype="multipart/form-data">
			{{csrf_field()}}

			<input type="text" class="name" autocomplete="off" name="fname" placeholder="Enter Your First Name" required=""><br>

			<input type="text" class="name" autocomplete="off" name="lname" placeholder="Enter Your Last Name" required=""><br>

			<input type="email" class="name" autocomplete="off" name="email" placeholder="Enter Your Email" required=""><br>

			<input type="text" style="-webkit-text-security:disc;" autocomplete="off" class="name" name="password" placeholder="Enter Your password" required=""><br>

			<input type="file" class="name" name="image">

			<input type="submit" name="submit" value="User Register">
		</form>
	</div>	
</div></div>
	<div class="clearfix"></div>
</div>
@endsection