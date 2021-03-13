@extends('user.layout.userheader')
@section('title','About Us')
@section('content-section')
<!-- //banner -->
<!-- about -->
	<div class="about" id="about">
		<div class="agileits_works-top">
				<div class="col-md-4 about-img-right">
					<img src="{{asset('user/images/ab.jpg')}}" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-8 agileits_works-grid two">
				 
				    <div class="wthree-text">
					<div class="heading-setion-w3ls">
						<h3 class="title-w3layouts">In Simple Words <i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-bell" aria-hidden="true"></i></h3>
					</div>
					   <p class="para-w3-agile">Marketing is the study and management of exchange relationships. Marketing is the business process of creating relationships with and satisfying customers. With its focus on the customer, marketing is one of the premier components of business management.</p>
					   <ul class="about-agile">
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Popular gifts & Toys</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Selection advice</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Gifts for sale</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Shipping and Delivery</li>
					</ul>
					</div>
					
				</div>
				
		    <div class="clearfix"> </div>
		</div>
		
	</div>
<!-- //about -->
<!-- team -->
<div class="team" id="team">
	<div class="container">
	<div class="heading-setion-w3ls">
		<h3 class="title-w3layouts">Meet our Team <i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-bell" aria-hidden="true"></i></h3>
	</div>
		<div class="col-md-6 team-left">
			<div class="team1">
				<div class="col-md-4 team-img1">
					@foreach($pp as $p)
					<img src="{{asset('admin/adminimage')}}/{{$p->image}}" alt="" />
				</div>
				<div class="col-md-4 team-info">
					<h3 style="color:white;">{{$p->user->first_name}} {{$p->user->last_name}}</h3>
					<p>{{$p->user->role}} Admin</p>
					@endforeach
					<div class="social-icons">
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			<div class="clearfix"></div>
			</div>
			<div class="team2">
				<div class="col-md-4 team-img2">
					<img src="{{asset('user/images/team2.jpg')}}" alt="" />
				</div>
				<div class="col-md-4 team-info">
					<h4>Nessa Peters</h4>
					<p>Lorem Ipsum</p>
					<div class="social-icons">
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-6 team-right">
			<div class="team3">
				<div class="col-md-4 team-img1">
					<img src="{{asset('user/images/team3.jpg')}}" alt="" />
				</div>
				<div class="col-md-4 team-info">
					<h4>Mark Johnson</h4>
					<p>Lorem Ipsum</p>
					<div class="social-icons">
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			<div class="clearfix"></div>
			</div>
			<div class="team4">
				<div class="col-md-4 team-img2">
					<img src="{{asset('user/images/team4.jpg')}}" alt="" />
				</div>
				<div class="col-md-4 team-info">
					<h4>Alice Puse</h4>
					<p>Lorem Ipsum</p>
					<div class="social-icons">
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //team -->
<!-- services -->
	<div class="services" id="services" style="position:relative;">
		<div class="container">
			<div class="w3l-about-grids">
				<div class="col-md-6 w3ls-about-left">
				<div class="heading-setion-w3ls">
					<h3 class="title-w3layouts white-agileits">Features <i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-bell white-agileits" aria-hidden="true"></i></h3>
				</div>
					<div class="agileits-icon-grid">
						<div class="icon-left hvr-radial-out">
							<i class="fa fa-heart" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Content management capabilities.</h5>
							<p class="para-w3-agile">The present invention provides a computer-based corporate content management and delivery (CCMD) system. The CCMD system provides efficient storage, management, and delivery of corporate content in response to orders for such content. The CCMD system includes a first module configured to create digital and/or acquire digital content for repurposing in a digital and/or a physical format. A second module, which is electronically coupled to the first module, manages data necessary to process and execute orders for such corporate content in one of digital format and physical format. A third CCMD system module integrates operations of the first module and the second module. The third module also coordinates these operations with internal and/or external third party content/product providers and customers.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="agileits-icon-grid">
						<div class="icon-left hvr-radial-out">
							<i class="fa fa-paper-plane" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Promotion and discount code tools.</h5>
							<p class="para-w3-agile">When a customer enters a promotion code during the checkout process, the store confirms that all conditions of the promotion are satisfied before validation. If the promotion code offers 20 percent off shopping carts of $200 or more, for instance, the code will not work if the minimum threshold hasn't been met. You can also tailor the requirements to exclude certain brands or products.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 w3ls-about-right">
				<div class="heading-setion-w3ls">
					<h3 class="title-w3layouts white-agileits">Admin Say <i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-bell white-agileits" aria-hidden="true"></i></h3>
				</div>
					<div class="w3ls-about-right-img">
						<div class="test-gri1">
							<div id="owl-demo2" class="owl-carousel">
								<?php $i=1; ?>
								@foreach($ppr as $tr)
								<div class="test-grid1">
									<img src="{{asset('admin/adminimage')}}/{{$tr->image}}" alt="" class="img-r">
									<h4></h4>
									<!-- <h4>{{$tr->user->username}}</h4> -->
									<span>ADMIN {{$i++}}</span>
									<p>Manage the access and level of responsibility of all users on all sites on your network
									Manage network and site features including
 									access to plugins, themes and privacy settings .</p>
								</div>
								@endforeach					
							</div>
						</div>	
					</div>
				</div>
				<div id="particles-js" style="position: absolute;"></div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->

<!-- gallery -->
<!-- //gallery -->

@endsection