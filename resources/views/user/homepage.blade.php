@extends('user.layout.userheader')
@section('title','Home Page')
@section('content-section')
<!-- About -->
<div class="about" id="about">
	<div class="container">
	</div>
</div>
<!-- //about -->
<!--we-offer -->
<div class="features">
	<div class="container">
		<div class="heading-setion-w3ls">
			<h2 class="title-w3layouts">What we Offer <i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-bell" aria-hidden="true"></i></h2>
		</div>
		<div class="col-md-4 servies-agileinfo">
		<p class="pink-w3ls">Making your events more colourful</p>
		<p class="para-w3agileits">We provide the best colletion of prezzie with awesome offers & discounts .</p>
		</div>
		<div class="col-md-4 servies-agileinfo">
			<ul>
				<li><i class="fas fa-angle-double-right" aria-hidden="true"></i>Mothers day  19%</li>
				<li><i class="fas fa-angle-double-right" aria-hidden="true"></i>Valentine's Day  12%</li>
				<li><i class="fas fa-angle-double-right" aria-hidden="true"></i>Wedding Day  15%</li>
				<li><i class="fas fa-angle-double-right" aria-hidden="true"></i>Anniversary  14%</li>
				<li><i class="fas fa-angle-double-right" aria-hidden="true"></i>House warming  10%</li>
			</ul>
		</div>
		<div class="col-md-4 servies-agileinfo">
			<ul>
				<li><i class="fas fa-angle-double-right" aria-hidden="true"></i>Retirement  11%</li>
				<li><i class="fas fa-angle-double-right" aria-hidden="true"></i>New baby 10%</li>
				<li><i class="fas fa-angle-double-right" aria-hidden="true"></i>Business 9%</li>
				<li><i class="fas fa-angle-double-right" aria-hidden="true"></i>Birth days 14%</li>
				<li><i class="fas fa-angle-double-right" aria-hidden="true"></i>Graduation day 10%</li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //we-offer -->
<div class="sale-w3ls col-sm col-md-auto">
	<div class="container">
		<h6 class="white-agileits">Sale! <span>50%</span> off.....</h6>
		<p>Shop our current range of discounted lines from some of our best-selling brands, including Katie Loxton, in our online only sale. Available whilst stocks last, so shop your favourites before they go!</p>
		<a href="{{route('aboutus')}}" class="botton-agileits">Read more</a>
	</div>
</div>
<!-- team -->
<div class="team" id="team">
	<div class="container">
	<div class="heading-setion-w3ls">
		<h3 class="title-w3layouts">Contact our Admins Team <i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-bell" aria-hidden="true"></i></h3>
	</div>
	
		<div class="col-md-6 team-left">
			<div class="team1">
				<div class="col-md-4 team-img1">
					@foreach($pp as $p)
					<img src="{{asset('admin/adminimage')}}/{{$p->image}}" alt="" />
				</div>
				<div class="col-md-4 team-info">
					<h3 style="color:white;">Er. {{$p->user->first_name}}</h3>
					<p>{{$p->user->role}} Admin</p>
					@endforeach
					<div class="social-icons">
						<a href="https://www.facebook.com/profile.php?id=100007346836916"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fmayes-khatri-1aa580181%3Ffbclid%3DIwAR196W7F1gWgguDUWIzDEYr1gwjIOfQjmYr_2hFiZDRyZiHmcYLjvkF7YO0&h=AT0pGmsEsPf69s7ezwojeRAJ60rcLdolqBfvRwzrB7kYJ8lG_gMYaW5b7l1akvQO-3VMlqZ65TFXDFvwLG3D-lWI73qjah_MnT40YmbFUy_LXtSNbnDgGZ-7OO0HsWvtqO4LVg"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="https://www.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			<div class="clearfix"></div>
			</div>
			<div class="team2">
				<div class="col-md-4 team-img2">
					<img src="{{asset('admin/adminimage/9036574_n.jpg')}}" alt="" />
				</div>
				<div class="col-md-4 team-info">
					<h3 style="color:white;">Er. Raju</h3>
					<p>Super Admin</p>
					<div class="social-icons">
						<a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="https://www.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-6 team-right">
			<div class="team3">
				<div class="col-md-4 team-img1">
					<img src="{{asset('admin/adminimage/2127152_mm.jpg')}}" alt="" />
				</div>
				<div class="col-md-4 team-info">
					<h3 style="color:white;">Er. MaYes </h3>
					<p>Super Admin</p>
					<div class="social-icons">
						<a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="https://www.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			<div class="clearfix"></div>
			</div>
			<div class="team4">
				<div class="col-md-4 team-img2">
					<img src="{{asset('user/images/team4.jpg')}}" alt="" />
				</div>
				<div class="col-md-4 team-info">
					<h3 style="color:white;">Er. jenny</h3>
					<p>Super Admin</p>
					<div class="social-icons">
						<a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="https://www.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
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
	<div class="services" style="position: relative;">
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
					<h3 class="title-w3layouts white-agileits">They Say <i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-bell white-agileits" aria-hidden="true"></i></h3>
				</div>
					<div class="w3ls-about-right-img">
						<div class="test-gri1">
							<div id="owl-demo2" class="owl-carousel">
								<?php $i=1; ?>
								@foreach($st as $tr)
								<div class="test-grid1">
									<img src="{{asset('admin/adminimage')}}/{{$tr->image}}" alt="" class="img-r">
									<h4></h4>
									<span>ADMIN {{$i++}}</span>
									<p>Manage the access and level of responsibility of all users on all sites on your network
									Manage network and site features including
 									access to plugins, themes and privacy settings .</p>
								</div>
								@endforeach	
								<div class="agile">
									<div class="test-grid1">
										<img src="{{asset('user/images/team2.jpg')}}" alt="" class="img-r">
										<h4>Joseph Carl</h4>
										<span>CUSTOMER 2</span>
										<p>Lorem ipsum dolor sit amet, Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
									</div>	
								</div>
								<div class="agile">
									<div class="test-grid1">
										<img src="{{asset('user/images/team3.jpg')}}" alt="" class="img-r">
										<h4>John Mark</h4>
										<span>CUSTOMER 3</span>
										<p>Lorem ipsum dolor sit amet, Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
									</div>	
								</div>					
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
@endsection