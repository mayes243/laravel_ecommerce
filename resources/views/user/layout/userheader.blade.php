<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>@yield('title')</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(function(){
      setTimeout(function(){
        $('#message').remove()},3000);
    })
  </script>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="prezzie Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="{{asset('user/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="icon" type="image/icon" href="{{asset('user/images/a.png')}}">
<!-- font-awesome-icons -->
<link href="{{asset('user/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="{{asset('user/css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('user/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="{{asset('partical/css/style.css')}}">
<link href="{{asset('user/fonts.googleapis.com/css?family=Tangerine:400,700')}}" rel="stylesheet">
<link href="{{asset('user/fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic')}}" rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
<div style="height:70px;width:100%;background-color:lightblue;border:2px solid blue;position:fixed;z-index:4;" >
	@Auth('myweb')
	
	<h2 style="font-size:20px;position:absolute;padding:10px;">{{Auth::guard('myweb')->user()->first_name}} {{Auth::guard('myweb')->user()->last_name}}</h2>
	<img src="{{asset('user/Userimage')}}/{{Auth::guard('myweb')->user()->user_image}}" height="38" width="38" style="border-radius:50%;margin-left:140px;margin-top:5px;">
	@if(Session::has('msg'))
    <div class="btn btn-danger noty" id="message" style="margin-left:35%;"  data-noty-options='{"text":"This is an error notification","layout":"topRight","type":"error"}'>
    {{Session::get('msg')}}
    </div>
    @endif
	<a href="{{route('userlogout')}}" style="font-size:25px; padding:8px;box-sizing: border-box; float: right;">Log Out</a>
	<!-- Auth vanekologin xa bhane ani guest bhaneko chaii login xna bhane  -->
	@endauth

	@guest('myweb')
	<a href="{{route('userlog')}}" style="font-size: 25px;padding:8px; float:right;box-sizing: border-box;">Login</a>
	<a href="{{route('userregister')}}" style="font-size: 25px;padding:10px; float: right;box-sizing: border-box;">Sign up</a>
	@endguest
	
</div>
<div class="clearfix"></div>
<div class="banner_top" id="home">
	<div data-vide-bg ="{{asset('user/video/gift-packs')}}">
		<div class="center-container">
			<div class="w3_agile_header">
							<div class="w3_menu">
							<div class="agileits_w3layouts_banner_info">
								<form action="{{route('search')}}" method="post"> 
									{{@csrf_field()}}
									<input type="search" autocomplete="off" required="" name="search" placeholder="Search......">
									<input type="submit" value="Search">
							</form>
							</div>
								<div class="top-nav">
								<nav class="navbar navbar-default">
									<div class="container">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
										</button>
									</div>
									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav">
										<li class="{{Request::is('/','home')?'active':''}}"><a href="{{route('homes')}}">Home</a></li>
											<li class="{{Request::is('/aboutus','aboutus')?'active':''}}"><a href="{{route('aboutus')}}">About Us</a></li>
											<li class="{{Request::is('/gallery','gallery')?'active':''}}"><a href="{{route('gallery')}}">Gallery</a></li>
											<li class="{{Request::is('/buynow','buynow')?'active':''}}"><a href="{{route('buynow')}}">Buy Now</a></li> 
											<li class="{{Request::is('/contactus','contactus')?'active':''}}"><a href="{{route('contactus')}}">Contact Us</a></li>
											<li class="nav-cart-w3ls">
												<form action="#" method="post" class="last"> 
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="display" value="1">
													<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
												</form> 
											</li>
										</ul>	
										<div class="clearfix"> </div>
									</div>	
								</nav>	
							</div>
						</div>

					<div class="clearfix"></div>
			    </div>
				<!-- banner-text -->
				<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="agileits-banner-info">
											<h4>Variety of All Items</h4>
										<h3>select your favourite Item</h3>
								</div>	
								</li>
							</ul>
						</div>
				</div>
			
			<!--banner Slider starts Here-->
			<div class="w3_agileits_social_media ">
				<ul class="social-icons3">
					<li class="agileinfo_share">Share On</li>
					<li><a href="https://www.facebook.com/" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="https://dribbble.com/" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="https://www.behance.net/" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				</ul>
			</div>
      </div>
   </div>
     </div>
     @yield('content-section')


     <!--footer-->
	<div class="footer_bottom section">
		<div class="agileits-w3layouts-footer">
			<div class="container">
				<div class="col-md-4 w3-agile-grid">
					<h5>About Us</h5>
					<p>Customize your store’s look and feel. Choose from 100s
					of designer made templates, and change anything you want to create your professional eCommerce website. Just drag n’ drop. No tech skills needed.</p>
					   <div class="w3_agileits_social_media team_agile_w3l team footer">
								<ul class="social-icons3">
									
									<li><a href="https://www.facebook.com/" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="https://twitter.com/" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="https://dribbble.com/" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="https://www.behance.net/" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								</ul>
							</div>	
				<div class="image-agileits">
				<img src="{{asset('user/images/f1.jpg')}}" alt="" class="img-r">
				</div>
				<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3-agile-grid mid-w3-add">
					<h5>Address</h5>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Phone Number</h6>
								<p>+977 982 469 200</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>E-mail :<a href="mail@example.com">
								mayeskhatri243@gmail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p>Nayabazzar-02-Kritipur-Kathmandu-Nepal 
								<span>Telephone : +977 986 872 170</span>
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-4 footer-right w3-agile-grid">
					<div class="agile_footer_grid">
					<h5>Latest News</h5>
						<ul class="agileits_w3layouts_footer_grid_list">
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								<a href="#" data-toggle="modal" data-target="#myModal1">Lorem ipsum neque vulputate </a>
							</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								<a href="#" data-toggle="modal" data-target="#myModal1">Dolor amet sed quam vitae</a>
							</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								<a href="#" data-toggle="modal" data-target="#myModal1">Lorem ipsum neque, vulputate </a>
							</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								<a href="#" data-toggle="modal" data-target="#myModal1">Dolor amet sed quam vitae</a>
							</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								<a href="#" data-toggle="modal" data-target="#myModal1">Lorem ipsum neque, vulputate </a>
							</li>
						</ul>
					</div>
					<h5>Stay in Touch</h5>
					@if(Session::has('message'))
					<div id="message" class="alert alert-success">
						{{Session::get('message')}}
					</div>
					@endif
					<form action="{{route('stay')}}" method="post">
						{{@csrf_field()}}
						<input type="email" name="email" autocomplete="off" placeholder="Email id" required="">
						<input type="submit" name="submit" value="Subscribe">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="copyright">
	           <p>© 2015 ~  <?php echo Date('yy-M-d'); ?>   E-commerce. All rights reserved | Design by <span class="btn btn-primary" style="font-family:cursive;">Mayes Khatri</span></a></p>
        </div>
  </div>
  <!-- Modal1 -->
						<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>E-site</h4>
										<img src="{{asset('user/images/f2.jpg')}}" alt=" " class="img-responsive">
										<h5>Integer lorem ipsum dolor sit amet </h5>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, rds which don't look even slightly believable..</p>
									</div>
								</div>
							</div>
						</div>
						<!-- //Modal1 -->
<!--//footer-->

	<!-- js -->
<script type="text/javascript" src="{{asset('user/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<script src="{{asset('user/js/responsiveslides.min.js')}}"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
<!-- for-Clients -->
		<script src="{{asset('user/js/owl.carousel.js')}}"></script>
			<!-- requried-jsfiles-for owl -->
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo2").owlCarousel({
									        items : 1,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : false,
									        navigationText :  false,
									        pagination : true,
									      });
									    });
									  </script>
			<!-- //requried-jsfiles-for owl -->
	<!-- //for-Clients -->
<!-- cart-js -->
	<script src="{{asset('user/js/minicart.min.js')}}"></script>
	<script>
		// Mini Cart
		paypal.minicart.render({
			action: '#',
		});

		if (~window.location.search.indexOf('reset=true')) {
			paypal.minicart.reset();
		}
	</script>
<!-- //cart-js --> 

<!-- video-bg -->
<script src="{{asset('user/js/jquery.vide.min.js')}}"></script>
<!-- //video-bg -->

<!-- Nice scroll -->
<script src="{{asset('user/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('user/js/scripts.js')}}"></script>
<!-- //Nice scroll -->
<!-- for bootstrap working -->
<script type="text/javascript" src="{{asset('user/js/bootstrap-3.1.1.min.js')}}"></script>
<!-- //for bootstrap working -->
<script type="text/javascript" src="{{asset('partical/particles.js')}}"></script>
<script type="text/javascript" src="{{asset('partical/app.js')}}"></script>
</body>
</html>