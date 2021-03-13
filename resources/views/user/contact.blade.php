@extends('user.layout.userheader')
@section('title','Contact us')
@section('content-section')
<!--contact-->
<div class="contact-top-agileinfo">
	<div class="container">
		<h3 class="title-w3layouts contact-head">We Love to Meet New people <i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-bell" aria-hidden="true"></i></h3>
	<div class="col-md-6 contact-left-wthree">
	<h5>Customer Care</h5>
	<div class="customer-info-w3ls">
		<img src="{{asset('user/images/team1.jpg')}}" alt="" />
		<div class="customer-right">
			<h6>Rose </h6>
			<p>USA<span>Toll free +012 345 6780</span></p>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="customer-info-w3ls">
		<img src="{{asset('user/images/team3.jpg')}}" alt="" />
		<div class="customer-right">
			<h6>Mark </h6>
			<p>INDIA<span>Toll free +045 123 6780</span></p>
		</div>
		<div class="clearfix"></div>
	</div>
	</div>
	<div class="col-md-6 contact-right-wthree">
		<h5>Others Ways to Connect</h5>
		<div class="connect-w3-agile">
			<i class="fa fa-facebook-square ione" aria-hidden="true"></i>
			<p>Building a tribe of encouraging, <a href="#">supportive, </a> passionate people is incredibly essential to an awesome life.</p>
			<div class="clearfix"></div>
		</div>
 		<div class="connect-w3-agile">
			<i class="fa fa-twitter-square itwo" aria-hidden="true"></i>
			<p>To improve your ability to  <a href="#">instantly connect with others,</a>seek feedback on your communication skills.</p>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</div>
<!-- contact-form-->
<div class="jarallax contact-bottom" id="contact">
	<div class="col-md-7 contact-right-w3l">
		<h3 class="title-w3layouts white-agileits">Reach Out to Us <i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-bell white-agileits" aria-hidden="true"></i></h3>
	@if(Session::has('message'))
    <div id="message" class="alert alert-success">
    {{Session::get('message')}}
    </div>
    @endif
		<form method="post" action="{{route('message')}}">
			{{csrf_field()}}

			<input type="text" class="name" name="firstname" placeholder="Enter Your First Name" required=""><br>

			<input type="text" class="name" name="lastname" placeholder="Enter Your Last Name" required=""><br>

			<input type="email" class="name" name="email" placeholder="Enter Your Email" required=""><br>

			<input type="text" class="name" name="subject" placeholder="Enter Your Subject">

			<textarea placeholder="Enter Your Message" name="message" required=""></textarea>
			
			<input type="submit" name="submit" value="Send message">
		</form>
	</div>
	<div class="col-md-5 agileits_w3layouts-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14130.927037028792!2d85.33106358286966!3d27.694684324752906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199a06c2eaf9%3A0xc5670a9173e161de!2sNew+Baneshwor%2C+Kathmandu+44600!5e0!3m2!1sen!2snp!4v1564110703789!5m2!1sen!2snp" width="800" height="602" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>	
	<div class="clearfix"></div>
</div>
<!-- //contact-form -->

<!-- //contact -->
@endsection