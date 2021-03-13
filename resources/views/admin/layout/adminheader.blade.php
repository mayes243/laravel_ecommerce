<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="{{asset('admin/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="{{asset('partical/css/style.css')}}">
<!-- for product icon -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<!-- Custom CSS -->
<link href="{{asset('admin/css/style.css')}}" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="{{asset('admin/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->
<!-- for icon -->
<link rel="icon" type="image/icon" href="{{asset('user/images/a.png')}}">

<!-- side nav css file -->
<link href="{{asset('admin/css/SidebarNav.min.css')}}" media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 <!-- link for user -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!--  -->
 <!-- js-->
<script src="{{asset('admin/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('admin/js/modernizr.custom.js')}}"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="{{asset('admin/js/Chart.js')}}"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="{{asset('admin/js/metisMenu.min.js')}}"></script>
<script src="{{asset('admin/js/custom.js')}}"></script>
<link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="{{asset('admin/js/pie-chart.js')}}" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
					<link href="{{asset('admin/css/owl.carousel.css')}}" rel="stylesheet">
					<script src="{{asset('admin/js/owl.carousel.js')}}"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse" style="position:relative;">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="{{route('dashboard')}}"><span class="fa fa-area-chart"></span> Glance<span class="dashboard_text">DASHBOARD</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">ADMIN PANEL</li>
              <li class="treeview">
              	<a href="{{route('dashboard')}}">
                <i class="fa fa-dashboard" style="color:skyblue; font-size:20px;"></i><span>   Dashboard</span></a>
                </a>
            </li>
            @if(Auth::user()->role=="super")
            <li class="treeview">
                <a href="{{route('registers')}}">
                <i class="fa fa-user-plus" style="font-size:20px; font-weight:20px; color:skyblue"></i>&nbsp;         New Admin Register<span class="label label-primary pull-right">new+</span></a>
                </a>

              </li>
              @endif
              <li class="treeview">
                <a href="">
                <i class="fa fa-copy" style="font-size:20px; font-weight:20px; color:skyblue"></i>
                <span>&nbsp;   Categories</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <span class="label label-primary pull-right">new+</span>
                  <li><a href="{{route('category')}}"><i class="fa fa-angle-right"></i> Add Category</a></li>
                  <li><a href="{{route('viewcategory')}}"><i class="fa fa-angle-right"></i> Show Category</a></li>
                </ul>
              </li>
                <li class="treeview">
                <a href="">
                <i class="fa fa-laptop" style="font-size:20px; font-weight:20px; color:skyblue"></i>
                <span>&nbsp;    Manufacture</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <span class="label label-primary1 pull-right">new+</span>
                  <li><a href="{{route('manufacture')}}"><i class="fa fa-angle-right"></i>Add Manufacture</a></li>
                  <li><a href="{{route('viewmanufacture')}}"><i class="fa fa-angle-right"></i>Show Manufacture</a></li>
                </ul>
              </li>
               <li class="treeview">
                <a href="">
                <i class="fas fa-ad" style="font-size:20px; font-weight:20px; color:skyblue"></i>
                <span>&nbsp;   Products</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <span class="label label-primary pull-right">new+</span>
                  <li><a href="{{route('addproduct')}}"><i class="fa fa-angle-right"></i> Add products</a></li>
                  <li><a href="{{route('showproduct')}}"><i class="fa fa-angle-right"></i> Show Products</a></li>
                </ul>
              </li>
			         <li class="treeview">
                <a href="">
                <i class="fa fa-user-circle-o" style="font-size:20px; font-weight:20px; color:skyblue"></i>
                <span>&nbsp; Customers</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <span class="label label-primary1 pull-right">new+</span>
                  <li><a href="{{route('customer')}}"><i class="fa fa-angle-right"></i> Add New Customer</a></li>
                  <li><a href="{{route('showcustomer')}}"><i class="fa fa-angle-right"></i> Show Customer</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="">
                <i class="fas fa-spinner" style="font-size:20px; font-weight:20px; color:skyblue"></i>
                <span>&nbsp; Shippings</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <span class="label pull-right label-info">new+</span>
                  <li><a href="{{route('shipping')}}"><i class="fa fa-angle-right"></i> Add Shipping</a></li>
                  <li><a href="{{route('showshipping')}}"><i class="fa fa-angle-right"></i> Show Shipping</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="">
                <i class="fa fa-cc-visa" style="font-size:20px; font-weight:20px; color:skyblue"></i>
                <span>&nbsp;&nbsp;  Payment Status</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <span class="label label-primary1 pull-right">new+</span>
                  <li><a href="{{route('payment')}}"><i class="fa fa-angle-right"></i> Add Payment</a></li>
                  <li><a href="{{route('viewpayment')}}"><i class="fa fa-angle-right"></i> Show Payment</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="">
                <i class="fab fa-codepen" style="font-size:20px; font-weight:20px; color:skyblue"></i>
                <span>&nbsp;&nbsp;  Order only</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <span class="label pull-right label-info">new+</span>
                  <li><a href="{{route('order')}}"><i class="fa fa-angle-right"></i> Add new Order</a></li>
                  <li><a href="{{route('showorder')}}"><i class="fa fa-angle-right"></i> Show order</a></li>
                </ul>
              </li>
                <li class="treeview">
                <a href="">
                <i class="glyphicon glyphicon-plus" style="font-size:20px; font-weight:20px; color:skyblue"></i>
                <span>&nbsp;&nbsp;  Items</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <span class="label label-primary1 pull-right">new+</span>
                  <li><a href="{{route('item')}}"><i class="fa fa-angle-right"></i> Add Items</a></li>
                  <li><a href="{{route('showitem')}}"><i class="fa fa-angle-right"></i> Show items</a></li>
                </ul>
                <li class="treeview">
                <a href="{{route('orderdetail')}}">
                <i class="glyphicon glyphicon-transfer" style="font-size:20px; font-weight:20px; color:skyblue"></i>
                <span>&nbsp;&nbsp;  All Orders Details</span>
                </a>
              </li>
              </li>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
      
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i>
                @if(Auth::user()->unreadNotifications->count()>0)
                <span class="badge">{{Auth::user()->unreadNotifications->count()}}</span>
                @endif
              </a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
                    @if(Auth::user()->unreadNotifications->count()>0)
										<h3 style="position:absolute;">You have {{Auth::user()->unreadNotifications->count()}} messages</h3>
                    @else
                    <h3 style="position:absolute;">Messages</h3>
                    @endif
                    <h3 style="float:right;"><a href="{{route('allRead')}}">Mark All As Read</a></h3>
									</div>
								</li>
                <!-- for limited data in foreach  you can use take and slice (0,2) 0 is starting and 2 is ending point -->
								@foreach(Auth::user()->unreadNotifications->take(5) as $s)
								<li style="background-color:lightblue;">
                  <a href="{{route('read',[$s->id])}}">
								   <div class="user_img"><img src="{{asset('admin/images/m.png')}}" alt=""></div>
								   <div class="notification_desc">
								   	<h5><a href="{{route('read',[$s->id])}}">{{$s->data['msg']['first_name']}}</a></h5>
									<p> {{$s->data['msg']['messages']}}</p>
									<p style="float:right;"><span>{{Carbon\Carbon::parse($s->created_at)->diffForHumans()}}</span></p>
									</div>
								   <div class="clearfix"></div>	
                   
								</a>
							</li>
							@endforeach

                @foreach(Auth::user()->readNotifications->take(5) as $s)
                <li><a href="">
                   <div class="user_img"><img src="{{asset('admin/images/m.png')}}" alt=""></div>
                   <div class="notification_desc">
                    <h5><a href="{{route('showallmsg')}}">{{$s->data['msg']['first_name']}}</a></h5>
                  <p> {{$s->data['msg']['messages']}}</p>
                  <p style="float:right;"><span>{{Carbon\Carbon::parse($s->created_at)->diffForHumans()}}</span></p>
                  </div>
                   <div class="clearfix"></div> 
                </a>
              </li>
              @endforeach

								<li>
									<div class="notification_bottom">
										<a href="{{route('showallmsg')}}">See all messages</a>
									</div> 
								</li>
							</ul>
						</li>
						<!-- <li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new notification</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="user_img"><img src="images/4.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								 </a></li>
								 <li class="odd"><a href="#">
									<div class="user_img"><img src="images/1.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li><a href="#">
									<div class="user_img"><img src="images/3.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/2.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								 <li>
									<div class="notification_bottom">
										<a href="#">See all notifications</a>
									</div> 
								</li>
							</ul>
						</li> -->	
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">8</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 8 pending task</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Database update</span><span class="percentage">40%</span>
										<div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										<div class="bar yellow" style="width:40%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar green" style="width:90%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
										<div class="clearfix"></div>	
									</div>
								   <div class="progress progress-striped active">
										 <div class="bar red" style="width: 33%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar  blue" style="width: 80%;"></div>
									</div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all pending tasks</a>
									</div> 
								</li>
							</ul>
						</li>	
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				<!--//end-search-box-->
				@if(Count($pp)==0)
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

								<div class="profile_img">	
									<span class="prfil-img"><img src="{{asset('admin/adminimage/5.png')}}" height="60" width="60" alt=""></span> 
									<div class="user-name">
										<p>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
										<span>{{Auth::user()->role}} admin</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="{{route('profile')}}"><i class="fa fa-user"></i> My Account</a> </li> 
								<li> <a href="{{route('profile')}}"><i class="fa fa-suitcase"></i> View Your Profile</a> </li> 
								<li> <a href="{{route('admin.login')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				@else
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

								<div class="profile_img">	
                  @foreach($pp as $s)
									<span class="prfil-img"><img src="{{asset('admin/adminimage')}}/{{$s->image}}" height="60" width="60" alt=""></span>
                  @endforeach 
									<div class="user-name">
										<p>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
										<span>{{Auth::user()->role}} admin</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="{{route('profile')}}"><i class="fa fa-user"></i> My Account</a> </li> 
								<li> <a href="{{route('profile')}}"><i class="fa fa-suitcase"></i> View Your Profile</a> </li> 
								<li> <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				@endif
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
@yield('content-section')
<!--footer-->
	<div class="footer">
	   <p style="font-family:'',cursive;">&copy; 2012 ~ <?php //default time for Nepal
 echo Date('Y').' - ';
date_default_timezone_set('Asia/Kathmandu');
echo date('h:i:sa')."<br>"; ('Y') ?> Glance Design Dashboard. All Rights Reserved || Design by MaYes</p>		
	</div>
    <!--//footer-->
	</div>
		
	<!-- new added graphs chart js-->
	
    <script src="{{asset('admin/js/Chart.bundle.js')}}"></script>
    <script src="{{asset('admin/js/utils.js')}}"></script>
	
	<script>
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                label: 'Dataset 2',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }]

        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Bar Chart'
                    }
                }
            });

        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            var zero = Math.random() < 0.2 ? true : false;
            barChartData.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return zero ? 0.0 : randomScalingFactor();
                });

            });
            window.myBar.update();
        });

        var colorNames = Object.keys(window.chartColors);
        document.getElementById('addDataset').addEventListener('click', function() {
            var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
            var dsColor = window.chartColors[colorName];
            var newDataset = {
                label: 'Dataset ' + barChartData.datasets.length,
                backgroundColor: color(dsColor).alpha(0.5).rgbString(),
                borderColor: dsColor,
                borderWidth: 1,
                data: []
            };

            for (var index = 0; index < barChartData.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());
            }

            barChartData.datasets.push(newDataset);
            window.myBar.update();
        });

        document.getElementById('addData').addEventListener('click', function() {
            if (barChartData.datasets.length > 0) {
                var month = MONTHS[barChartData.labels.length % MONTHS.length];
                barChartData.labels.push(month);

                for (var index = 0; index < barChartData.datasets.length; ++index) {
                    //window.myBar.addData(randomScalingFactor(), index);
                    barChartData.datasets[index].data.push(randomScalingFactor());
                }

                window.myBar.update();
            }
        });

        document.getElementById('removeDataset').addEventListener('click', function() {
            barChartData.datasets.splice(0, 1);
            window.myBar.update();
        });

        document.getElementById('removeData').addEventListener('click', function() {
            barChartData.labels.splice(-1, 1); // remove the label first

            barChartData.datasets.forEach(function(dataset, datasetIndex) {
                dataset.data.pop();
            });

            window.myBar.update();
        });
    </script>
	<!-- new added graphs chart js-->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="{{asset('admin/js/classie.js')}}"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="{{asset('admin/js/jquery.nicescroll.js')}}"></script>
	<script src="{{asset('admin/js/scripts.js')}}"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src="{{asset('admin/js/SidebarNav.min.js')}}" type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- for index page weekly sales java script -->
	<script src="{{asset('admin/js/SimpleChart.js')}}"></script>
    <script>
        var graphdata1 = {
            linecolor: "#CCA300",
            title: "Monday",
            values: [
            { X: "6:00", Y: 10.00 },
            { X: "7:00", Y: 20.00 },
            { X: "8:00", Y: 40.00 },
            { X: "9:00", Y: 34.00 },
            { X: "10:00", Y: 40.25 },
            { X: "11:00", Y: 28.56 },
            { X: "12:00", Y: 18.57 },
            { X: "13:00", Y: 34.00 },
            { X: "14:00", Y: 40.89 },
            { X: "15:00", Y: 12.57 },
            { X: "16:00", Y: 28.24 },
            { X: "17:00", Y: 18.00 },
            { X: "18:00", Y: 34.24 },
            { X: "19:00", Y: 40.58 },
            { X: "20:00", Y: 12.54 },
            { X: "21:00", Y: 28.00 },
            { X: "22:00", Y: 18.00 },
            { X: "23:00", Y: 34.89 },
            { X: "0:00", Y: 40.26 },
            { X: "1:00", Y: 28.89 },
            { X: "2:00", Y: 18.87 },
            { X: "3:00", Y: 34.00 },
            { X: "4:00", Y: 40.00 }
            ]
        };
        var graphdata2 = {
            linecolor: "#00CC66",
            title: "Tuesday",
            values: [
              { X: "6:00", Y: 100.00 },
            { X: "7:00", Y: 120.00 },
            { X: "8:00", Y: 140.00 },
            { X: "9:00", Y: 134.00 },
            { X: "10:00", Y: 140.25 },
            { X: "11:00", Y: 128.56 },
            { X: "12:00", Y: 118.57 },
            { X: "13:00", Y: 134.00 },
            { X: "14:00", Y: 140.89 },
            { X: "15:00", Y: 112.57 },
            { X: "16:00", Y: 128.24 },
            { X: "17:00", Y: 118.00 },
            { X: "18:00", Y: 134.24 },
            { X: "19:00", Y: 140.58 },
            { X: "20:00", Y: 112.54 },
            { X: "21:00", Y: 128.00 },
            { X: "22:00", Y: 118.00 },
            { X: "23:00", Y: 134.89 },
            { X: "0:00", Y: 140.26 },
            { X: "1:00", Y: 128.89 },
            { X: "2:00", Y: 118.87 },
            { X: "3:00", Y: 134.00 },
            { X: "4:00", Y: 180.00 }
            ]
        };
        var graphdata3 = {
            linecolor: "#FF99CC",
            title: "Wednesday",
            values: [
              { X: "6:00", Y: 230.00 },
            { X: "7:00", Y: 210.00 },
            { X: "8:00", Y: 214.00 },
            { X: "9:00", Y: 234.00 },
            { X: "10:00", Y: 247.25 },
            { X: "11:00", Y: 218.56 },
            { X: "12:00", Y: 268.57 },
            { X: "13:00", Y: 274.00 },
            { X: "14:00", Y: 280.89 },
            { X: "15:00", Y: 242.57 },
            { X: "16:00", Y: 298.24 },
            { X: "17:00", Y: 208.00 },
            { X: "18:00", Y: 214.24 },
            { X: "19:00", Y: 214.58 },
            { X: "20:00", Y: 211.54 },
            { X: "21:00", Y: 248.00 },
            { X: "22:00", Y: 258.00 },
            { X: "23:00", Y: 234.89 },
            { X: "0:00", Y: 210.26 },
            { X: "1:00", Y: 248.89 },
            { X: "2:00", Y: 238.87 },
            { X: "3:00", Y: 264.00 },
            { X: "4:00", Y: 270.00 }
            ]
        };
        var graphdata4 = {
            linecolor: "Random",
            title: "Thursday",
            values: [
              { X: "6:00", Y: 300.00 },
            { X: "7:00", Y: 410.98 },
            { X: "8:00", Y: 310.00 },
            { X: "9:00", Y: 314.00 },
            { X: "10:00", Y: 310.25 },
            { X: "11:00", Y: 318.56 },
            { X: "12:00", Y: 318.57 },
            { X: "13:00", Y: 314.00 },
            { X: "14:00", Y: 310.89 },
            { X: "15:00", Y: 512.57 },
            { X: "16:00", Y: 318.24 },
            { X: "17:00", Y: 318.00 },
            { X: "18:00", Y: 314.24 },
            { X: "19:00", Y: 310.58 },
            { X: "20:00", Y: 312.54 },
            { X: "21:00", Y: 318.00 },
            { X: "22:00", Y: 318.00 },
            { X: "23:00", Y: 314.89 },
            { X: "0:00", Y: 310.26 },
            { X: "1:00", Y: 318.89 },
            { X: "2:00", Y: 518.87 },
            { X: "3:00", Y: 314.00 },
            { X: "4:00", Y: 310.00 }
            ]
        };
        var Piedata = {
            linecolor: "Random",
            title: "Profit",
            values: [
              { X: "Monday", Y: 50.00 },
            { X: "Tuesday", Y: 110.98 },
            { X: "Wednesday", Y: 70.00 },
            { X: "Thursday", Y: 204.00 },
            { X: "Friday", Y: 80.25 },
            { X: "Saturday", Y: 38.56 },
            { X: "Sunday", Y: 98.57 }
            ]
        };
        $(function () {
            $("#Bargraph").SimpleChart({
                ChartType: "Bar",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#sltchartype").on('change', function () {
                $("#Bargraph").SimpleChart('ChartType', $(this).val());
                $("#Bargraph").SimpleChart('reload', 'true');
            });
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Linegraph").SimpleChart({
                ChartType: "Line",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: false,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Areagraph").SimpleChart({
                ChartType: "Area",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Scatterredgraph").SimpleChart({
                ChartType: "Scattered",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Piegraph").SimpleChart({
                ChartType: "Pie",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                showpielables: true,
                data: [Piedata],
                legendsize: "250",
                legendposition: 'right',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });

            $("#Stackedbargraph").SimpleChart({
                ChartType: "Stacked",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });

            $("#StackedHybridbargraph").SimpleChart({
                ChartType: "StackedHybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
        });

    </script>
	<!-- //for index page weekly sales java script -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="{{asset('admin/js/bootstrap.js')}}"> </script>
	<!-- //Bootstrap Core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(function(){
      setTimeout(function(){
        $('#message').remove()},3000);
    })
  </script>
  <script type="text/javascript" src="{{asset('partical/particles.js')}}"></script>
  <script type="text/javascript" src="{{asset('partical/app.js')}}"></script>
	
</body>
</html>
