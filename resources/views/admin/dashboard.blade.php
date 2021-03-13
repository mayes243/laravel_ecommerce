@extends('admin.layout.adminheader')
@section('title','Dashboard')
@section('content-section')
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="col_1">
			<div class="col-md-4 span_8">
				<div class="activity_box">
					<h2><marquee>customer messages</marquee></h2>
					<div class="scrollbar" id="style-1">
						@foreach($showw as $s)
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src="{{asset('admin/images/m.png')}}" class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="{{route('showallmsg')}}">{{$s->first_name}}</a></h5>
								<p>{{Substr($s->messages,0,10).'....'.'   show more'}}</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>{{Carbon\Carbon::parse($s->created_at)->diffForHumans()}}</h6></div>
							<div class="clearfix"> </div>
						</div>
						@endforeach
					</div>
					<form action="#" method="post">
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Submit"/>		
					</form>
				</div>
			</div>
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box1">
					<h3>chat</h3>
					<div class="scrollbar" id="style-3">
						<div class="activity-row activity-row1">
							<div class="col-xs-3 activity-img"><img src="{{asset('admin/images/1.jpg')}}" class="img-responsive" alt=""/><span>06:01 AM</span></div>
							<div class="col-xs-5 activity-img1">
								<div class="activity-desc-sub">
									<h5>Michael Chris</h5>
									<p>Hello ! this is Michael chris</p>
								</div>
							</div>
							<div class="col-xs-4 activity-desc1"></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-2 activity-desc1"></div>
							<div class="col-xs-7 activity-img2">
								<div class="activity-desc-sub1">
									<h5>Alexander</h5>
									<p>Hi,How are you ? What about our next meeting?</p>
								</div>
							</div>
							<div class="col-xs-3 activity-img"><img src="{{asset('admin/images/3.jpg')}}" class="img-responsive" alt=""/><span>06:02 AM</span></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-3 activity-img"><img src="{{asset('admin/images/1.jpg')}}" class="img-responsive" alt=""/><span>06:05 AM</span></div>
							<div class="col-xs-5 activity-img1">
								<div class="activity-desc-sub">
									<h5>Michael Chris</h5>
									<p>Yeah fine, Hope you the same</p>
								</div>
							</div>
							<div class="col-xs-4 activity-desc1"></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-2 activity-desc1"></div>
							<div class="col-xs-7 activity-img2">
								<div class="activity-desc-sub1">
									<h5>Alexander</h5>
									<p>Wow that's great</p>
								</div>
							</div>
							<div class="col-xs-3 activity-img"><img src="{{asset('admin/images/3.jpg')}}" class="img-responsive" alt=""/><span>06:20 PM</span></div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<form action="#" method="post">
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Send"/>		
					</form>
				</div>
			</div>

			<div class="col-md-4 span_8">
				<div class="activity_box activity_box2">
					<h3><marquee>enquery by e-mail </marquee></h3>
					<div class="scrollbar" id="style-2">
						<div class="activity-row activity-row1">
							<div class="single-bottom">
								<ul>
									@foreach($stay as $ss)
									<li>
										<i type="checkbox"  id="brand" class="fa fa-hand-o-right" style="font-size:23px;" value="">
										<label for="brand"><span></span><strong style="color:red;cursor:pointer; font-family:'',cursive;">{{$ss->stay_touch}}</strong></label></i>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
					<form action="#" method="post">
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Submit"/>		
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<br>
		</div>
				<div class="charts">		
			<div class="mid-content-top charts-grids">
				<div class="middle-content">
						<h4 class="title">Carousel Slider</h4>
					<!-- start content_slider -->
					<div id="owl-demo" class="owl-carousel text-center">
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{asset('admin/images/slider1.jpg')}}" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{asset('admin/images/slider2.jpg')}}" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{asset('admin/images/slider3.jpg')}}" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{asset('admin/images/slider4.jpg')}}" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{asset('admin/images/slider5.jpg')}}" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{asset('admin/images/slider6.jpg')}}" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{asset('admin/images/slider7.jpg')}}" alt="name">
						</div>
						
					</div>
				</div>
					<!--//sreen-gallery-cursual---->
			</div>
		</div>
			<div class="main-page">
			<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$452</strong></h5>
                      <span>Total Revenue</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$1019</strong></h5>
                      <span>Online Revenue</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-money user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$1012</strong></h5>
                      <span>Expenses</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$450</strong></h5>
                      <span>Expenditure</span>
                    </div>
                </div>
        	 </div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>1450</strong></h5>
                      <span>Total Users</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
		</div>
		
		<div class="row-one widgettable">
			<div class="col-md-7 content-top-2 card">
				<div class="agileinfo-cdr">
					<div class="card-header">
                        <h3>Weekly Sales</h3>
                    </div>
					
						<div id="Linegraph" style="width: 98%; height: 350px">
						</div>
						
				</div>
			</div>
			<div class="col-md-3 stat">
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Sales</h5>
					<label>1283+</label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-1" class="pie-title-center" data-percent="45"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Reviews</h5>
					<label>2262+</label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-2" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Visitors</h5>
					<label>12589+</label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-3" class="pie-title-center" data-percent="90"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-2 stat">
				<div class="content-top">
					<div class="top-content facebook">
						<a href="#"><i class="fa fa-facebook"></i></a>
					</div>
					<ul class="info">
						<li class="col-md-6"><b>1,296</b><p>Friends</p></li>
						<li class="col-md-6"><b>647</b><p>Likes</p></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="content-top">
					<div class="top-content twitter">
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<ul class="info">
						<li class="col-md-6"><b>1,997</b><p>Followers</p></li>
						<li class="col-md-6"><b>389</b><p>Tweets</p></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="content-top">
					<div class="top-content google-plus">
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</div>
					<ul class="info">
						<li class="col-md-6"><b>1,216</b><p>Followers</p></li>
						<li class="col-md-6"><b>321</b><p>shares</p></li>
						<div class="clearfix"></div>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
				
				<div class="charts">
					<div class="col-md-4 charts-grids widget">
						<div class="card-header">
							<h3>Bar chart</h3>
						</div>
						
						<div id="container" style="width: 100%; height:270px;">
							<canvas id="canvas"></canvas>
						</div>
						<button id="addDataset">Add Dataset</button>
						<button id="removeDataset">Remove Dataset</button>
						<button id="addData">Add Data</button>
						<button id="removeData">Remove Data</button>
					</div>
					
					<div class="col-md-4 charts-grids widget states-mdl">
						<div class="card-header">
							<h3>Column & Line Graph</h3>
						</div>
						<div id="chartdiv"></div>
					</div>
			
					<div class="clearfix"> </div>
				</div>
				
	
	<!-- for amcharts js -->
			<script src="{{asset('admin/js/amcharts.js')}}"></script>
			<script src="{{asset('admin/js/serial.js')}}"></script>
			<script src="{{asset('admin/js/export.min.js')}}"></script>
			<link rel="stylesheet" href="{{asset('admin/css/export.css')}}" type="text/css" media="all" />
			<script src="{{asset('admin/js/light.js')}}"></script>
	<!-- for amcharts js -->

    <script  src="{{asset('admin/js/index1.js')}}"></script>
	
		
			</div>
		</div>
	
@endsection